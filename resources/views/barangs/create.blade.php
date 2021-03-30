@extends('barangs.layout')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Barang
                </div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="post" action="{{ route('barangs.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="Id_Barang">Id_Barang</label>
                            <input type="text" name="Id_Barang" class="form-control" id="Id_Barang" aria-describedby="Id_Barang" >
                        </div>

                        <div class="form-group">
                            <label for="Kode_Barang">Kode_Barang</label>
                            <input type="Kode_Barang" name="Kode_Barang" class="form-control" id="Kode_Barang" aria-describedby="Kode_Barang" >
                        </div>

                        <div class="form-group">
                            <label for="Nama_Barang">Nama_Barang</label> 
                            <input type="Nama_Barang" name="Nama_Barang" class="form-control" id="Nama_Barang" aria-describedby="Nama_Barang" >
                        </div>

                        <div class="form-group">
                            <label for="Kategori_barang">Kategori_Barang</label>
                            <input type="Kategori_barang" name="Kategori_barang" class="form-control" id="Kategori_barang" aria-describedby="Kategori_barang" >
                        </div>

                        <div class="form-group">
                            <label for="Harga">Harga</label>
                            <input type="Harga" name="Harga" class="form-control" id="Harga" aria-describedby="Harga" >
                        </div>

                        <div class="form-group">
                            <label for="Qty">Qty</label>
                            <input type="Qty" name="Qty" class="form-control" id="Qty" aria-describedby="Qty" >
                        </div>

                       

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection