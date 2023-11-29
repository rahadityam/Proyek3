<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('barang', ['barangs' => $barangs]);
    }

    public function show($id)
    {
        // $barang = Barang::find($id);
    
        // if (!$barang) {
        //     return response()->json(['message' => 'Barang tidak ditemukan'], 404);
        // }
    
        // return response()->json(['message' => 'Barang berhasil ditemukan', 'data' => $barang]);

        return view('create');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'KodeBarang' => 'required',
            'NamaBarang' => 'required',
            'Satuan' => 'required',
            'HargaSatuan' => 'required|numeric',
            'Stok' => 'required|integer',
        ]);

        
        $barang = Barang::create($request->all());

        return response()->json(['message' => 'Barang berhasil ditambahkan', 'data' => $barang], 201);
    }

    public function edit($id)
    {
        $barang = Barang::find($id);

        if (!$barang) {
            return response()->json(['message' => 'Barang tidak ditemukan'], 404);
        }

        return view('edit', ['barang' => $barang]);
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);

        $request->validate([
            'KodeBarang' => 'required',
            'NamaBarang' => 'required',
            'Satuan' => 'required',
            'HargaSatuan' => 'required|numeric',
            'Stok' => 'required|integer',
        ]);

        $barang->update($request->all());

        return response()->json(['message' => 'Barang berhasil diupdate', 'data' => $barang]);
    }


    public function destroy($id)
    {
        $barang = Barang::find($id);

        if (!$barang) {
            return response()->json(['message' => 'Barang tidak ditemukan'], 404);
        }

        $barang->delete();

        return response()->json(['message' => 'Barang berhasil dihapus']);
    }

}
