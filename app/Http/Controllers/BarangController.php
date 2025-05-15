<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_barang = barang::orderBy('created_at', 'DESC')->get();

        return view('databarang.index', compact('data_barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('databarang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request -> validate([
            'No_resi' => 'required',
            'Pengirim' => 'required',
            'Alamat_tujuan' => 'required',
            'Penerima' => 'required',
            'Status_pengiriman' => 'required',
        ]);

        barang::create($request->all());

        return redirect()->route('databarang')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data_barang = barang::findOrFail($id);
  
        return view('databarang.show', compact('data_barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_barang = barang::findOrFail($id);
  
        return view('databarang.edit', compact('data_barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data_barang = barang::findOrFail($id);
  
        $data_barang->update($request->all());
  
        return redirect()->route('databarang')->with('success', 'Data Barang Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data_barang = barang::findOrFail($id);
  
        $data_barang->delete();
  
        return redirect()->route('databarang')->with('success', 'Data Barang Berhasil Dihapus!');
    }
}
