@extends('layouts.app')
  
@section('title', 'Edit Data')
  
@section('contents')
    <h1 class="mb-0">Edit Data Barang</h1>
    <hr />
    <form action="{{ route('databarang.update', $data_barang->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">No resi</label>
                <input type="text" name="No_resi" class="form-control" placeholder="No_resi" value="{{ $data_barang->No_resi }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Pengirim</label> 
                <input type="text" name="Pengirim" class="form-control" placeholder="Pengirim" value="{{ $data_barang->Pengirim }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Penerima</label>
                <input type="text" name="Penerima" class="form-control" placeholder="penerima" value="{{ $data_barang->Penerima }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Status pengiriman</label>
                <input type="text" name="Status_pengiriman" class="form-control" placeholder="Status pengiriman" value="{{ $data_barang->Status_pengiriman }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Alamat tujuan</label>
                <textarea class="form-control" name="Alamat_tujuan" placeholder="Alamat tujuan" >{{ $data_barang->Alamat_tujuan }}</textarea>
            </div>
        </div>
        <div class="mt-3 text-left">
            <button type="submit" class="btn btn-info">Perbarui</button>
            <a href="{{ route('databarang') }}" id="btn-kembali" class="btn btn-secondary ml-3">Kembali</a>
        </div>
    </form>
@endsection