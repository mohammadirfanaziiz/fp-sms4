@extends('layouts.app')
  
@section('title', 'Input Data')
  
@section('contents')
    <h1 class="mb-0">Tambah Data Barang</h1>
    <hr />
    <form action="{{ route('databarang.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="No_resi" class="form-control" placeholder="no resi">
            </div>
            <div class="col">
                <input type="text" name="Penerima" class="form-control" placeholder="penerima">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Pengirim" class="form-control" placeholder="Pengirim">
            </div>
            <div class="col">
                <input type="text" name="Status_pengiriman" class="form-control" placeholder="status pengiriman">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Alamat_tujuan" class="form-control" placeholder="Alamat Tujuan">
            </div>
        </div>
 
        <div class="mt-5 text-left">
        <button id="btn" class="btn btn-success" type="submit">Simpan Data</button>
        <a href="{{ route('databarang') }}" id="btn-kembali" class="btn btn-secondary ml-3">Kembali</a>
        </div>
    </form>
@endsection