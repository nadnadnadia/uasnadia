<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasien = Pasien::all();
        return view('pasien.index', compact('pasien'));
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NIK' => 'required',
            'nama' => 'required',
            'rincian_pendaftaran' => 'required',
            'tipe' => 'required',
        ]);
        $data = $request->all();
        Pasien::create($data);

        return redirect()->route('pasien.index')->with('success', 'pasien berhasil ditambahkan.');
    }

    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', compact('pasien'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'NIK' => 'required',
            'nama' => 'required',
            'rincian_pendaftaran' => 'required',
            'tipe' => 'required',
        ]);

        $pasien = Pasien::findOrFail($id);
        $data = $request->all();

        $pasien->update($data);
        return redirect()->route('pasien.index')->with('success', 'Pasien berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);

        $pasien->delete();

        return redirect()->route('pasien.index')->with('success', 'Pasien berhasil dihapus.');
    }
}
