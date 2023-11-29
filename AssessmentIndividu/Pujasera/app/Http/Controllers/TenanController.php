<?php

namespace App\Http\Controllers;

use App\Models\Tenan;
use Illuminate\Http\Request;

class TenanController extends Controller
{
    public function index()
    {
        $tenans = Tenan::all();
        return view('tenan', ['tenans' => $tenans]);
    }

    public function show($id)
    {
        $tenan = Tenan::find($id);

        if (!$tenan) {
            return response()->json(['message' => 'Tenan tidak ditemukan'], 404);
        }

        return response()->json(['message' => 'Tenan berhasil ditemukan', 'data' => $tenan]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'KodeTenan' => 'required',
            'NamaTenan' => 'required',
            'HP' => 'required',
        ]);

        $tenan = Tenan::create($request->all());

        return response()->json(['message' => 'Tenan berhasil ditambahkan', 'data' => $tenan], 201);
    }

    public function update(Request $request, $id)
    {
        $tenan = Tenan::findOrFail($id);

        $request->validate([
            'KodeTenan' => 'required',
            'NamaTenan' => 'required',
            'HP' => 'required',
        ]);

        $tenan->update($request->all());

        return response()->json(['message' => 'Tenan berhasil diupdate', 'data' => $tenan]);
    }

    public function destroy($id)
    {
        $tenan = Tenan::findOrFail($id);
        $tenan->delete();

        return response()->json(['message' => 'Tenan berhasil dihapus']);
    }
}
