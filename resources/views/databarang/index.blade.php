@extends('layouts.app')
  
@section('title', 'Data Barang')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Data Barang</h1>
        <a href="{{ route('databarang.create') }}" class="btn btn-success">Tambah Data barang</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>No Resi</th>
                <th>Pengirim</th>
                <th>Alamat tujuan</th>
                <th>penerima</th>
                <th>status pengiriman</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>+
            @if($data_barang->count() > 0)
                @foreach($data_barang as $barang)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $barang->No_resi }}</td>
                        <td class="align-middle">{{ $barang->Pengirim }}</td>
                        <td class="align-middle">{{ $barang->Alamat_tujuan }}</td>
                        <td class="align-middle">{{ $barang->Penerima }}</td>  
                        <td class="align-middle">{{ $barang->Status_pengiriman }}</td>  
                        <td class="align-middle">
                            <a href="{{ route('databarang.show', $barang->id) }}" type="button" class="btn btn-primary">Detail</a>
                            <a href="{{ route('databarang.edit', $barang->id)}}" type="button" class="btn btn-warning">Edit</a>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="{{ route('databarang.destroy', $barang->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Data Barang Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection