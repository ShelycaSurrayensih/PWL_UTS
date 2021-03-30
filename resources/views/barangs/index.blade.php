@extends('barangs.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Pengelolaan Barang</h2>
            </div>

            <div class="float-right my-2">
                <a class="btn btnsuccess" href="{{ route('barangs.create') }}"> Input Barang</a>

            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>

    @endif

    <div>
        <div class="mx-auto pull-right">
            <div class="float-left">
                <form action="{{ route('barangs.index') }}" method="GET" role="search">
                    <div class="input-group">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" title="Search ">
                                <span class="fas fa-search">Search</span>
                            </button>
                        </span>

                        <input type="text" class="form-control mr-2" name="term" placeholder="Search" id="term">
                        <a href="{{ route('barangs.index') }}" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt">Refresh</span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Id_Barang</th>
            <th>Kode_Barang</th>
            <th>Nama_Barang</th>
            <th>Kategori_Barang</th>
            <th>Harga</th>
            <th>Qty</th>


            <th width="280px">Action</th>
        </tr>
        @foreach ($barangs as $Barang)
        <tr>
            <td>{{ $Barang->Id_Barang }}</td>
            <td>{{ $Barang->Kode_Barang }}</td>
            <td>{{ $Barang->Nama_Barang }}</td>
            <td>{{ $Barang->Kategori_barang }}</td>
            <td>{{ $Barang->Harga }}</td>
            <td>{{ $Barang->Qty }}</td>

            <td>
                <form action="{{ route('barangs.destroy',$Barang->Id_Barang) }}" method="POST">
                    <a class="btn btninfo" href="{{ route('barangs.show',$Barang->Id_Barang) }}">Show</a>
                    <a class="btn btnprimary" href="{{ route('barangs.edit',$Barang->Id_Barang) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
    {{ $barangs->links() }}
@endsection
