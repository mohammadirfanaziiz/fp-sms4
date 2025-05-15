@extends('layouts.app')
  
@section('title', 'Detail Data')
  
@section('contents')
    <h1 class="mb-0">Detail Data Barang</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">No resi</label>
            <input type="text" name="title" class="form-control" placeholder="no resi" value="{{ $data_barang->No_resi }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Pengririm </label>
            <input type="text" name="Pengirim" class="form-control" placeholder="Pengririm" value="{{ $data_barang->Pengirim }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Penerima</label>
            <input type="text" name="Pengirim" class="form-control" placeholder="penerima" value="{{ $data_barang->Penerima }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Status pengiriman</label>
            <input type="text" name="Status_pengiriman" class="form-control" placeholder="status Pengririman" value="{{ $data_barang->Status_pengiriman }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Alamat tujuan</label>
            <textarea class="form-control" name="Alamat_tujuan" placeholder="Alamat tujuan" readonly>{{ $data_barang->Alamat_tujuan }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $data_barang->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $data_barang->updated_at }}" readonly>
        </div>
    </div>
    <div class="mt-3 text-left">
        <a href="{{ route('databarang') }}" id="btn-kembali" class="btn btn-secondary">Kembali</a>
    </div>
@endsection