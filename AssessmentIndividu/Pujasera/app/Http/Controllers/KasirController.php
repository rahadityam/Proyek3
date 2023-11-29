<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index()
    {
        $kasirs = Kasir::all();
        return view('kasir', ['kasirs' => $kasirs]);
    }

    public function show($id)
    {
        $kasir = Kasir::find($id);

        if (!$kasir) {
            return response()->json(['message' => 'Kasir tidak ditemukan'], 404);
        }

        return response()->json(['message' => 'Kasir berhasil ditemukan', 'data' => $kasir]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'KodeKasir' => 'required|unique:kasir',
            'Nama' => 'required',
            'HP' => 'required',
        ]);

        $kasir = Kasir::create($request->all());

        return response()->json(['message' => 'Kasir berhasil ditambahkan', 'data' => $kasir], 201);
    }

    public function update(Request $request, $id)
    {
        $kasir = Kasir::findOrFail($id);

        $request->validate([
            'KodeKasir' => 'required|unique:kasir,KodeKasir,' . $id,
            'Nama' => 'required',
            'HP' => 'required',
        ]);

        $kasir->update($request->all());

        return response()->json(['message' => 'Kasir berhasil diupdate', 'data' => $kasir]);
    }

    public function destroy($id)
    {
        $kasir = Kasir::findOrFail($id);
        $kasir->delete();

        return response()->json(['message' => 'Kasir berhasil dihapus']);
    }
}
