<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    public function index()
    {
        $data = Data::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_recap' => 'required|string|unique:data,id_recap',
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'tanggal_registrasi' => 'required|date',
            'nomor_PBG' => 'nullable|string|max:255',
            'no_PBG' => 'nullable|string|max:255',
            'alamat' => 'required|string|max:255',
            'RT' => 'nullable|string|max:10',
            'RW' => 'nullable|string|max:10',
            'kelurahan' => 'required|string|max:255',
            'IRK' => 'nullable|array',
            'luas_lahan' => 'required|integer|min:0',
            'luas_lahan_sertifikat' => 'required|integer|min:0',
            'jumlah_lantai' => 'required|integer|min:0',
            'fungsi_bangunan' => 'required|string|max:255',
            'penggunaan_bangunan' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'pbg_terbit' => 'nullable|string|max:255',
            'no_pbg_terbit' => 'nullable|string|max:255',
        ]);

        $data = Data::create($request->all());

        return response()->json($data, 201);
    }
}
