@extends('barangs.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 30rem;">
            <div class="card-header">
                Detail Barang
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Id Barang: </b>{{$Barang->Id_Barang}}</li>
                    <li class="list-group-item"><b>Kode Barang: </b>{{$Barang->Kode_Barang}}</li>
                    <li class="list-group-item"><b>Nama Barang: </b>{{$Barang->Nama_Barang}}</li>
                    <li class="list-group-item"><b>Kategori Barang: </b>{{$Barang->Kategori_barang}}</li>
                    <li class="list-group-item"><b>Harga: </b>{{$Barang->Harga}}</li>
                    <li class="list-group-item"><b>Qty: </b>{{$Barang->Qty}}</li>

                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{ route('barangs.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
