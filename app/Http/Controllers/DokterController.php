<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = Dokter::all();
        return view('dokter.index', compact('dokter'));
    }

    public function create()
    {
        return view('dokter.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_dokter' => 'required',
            'nama_dokter' => 'required',
            'spesialisasi' => 'required',
            'no_telepon' => 'required',
        ]);
        $data = $request->all();
        Dokter::create($data);

        return redirect()->route('dokter.index')->with('success', 'Dokter berhasil ditambahkan.');
    }

    public function edit(Dokter $dokter)
    {
        return view('dokter.edit', compact('dokter'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_dokter' => 'required',
            'nama_dokter' => 'required',
            'spesialisasi' => 'required',
            'no_telepon' => 'required'
        ]);

        $dokter = Dokter::findOrFail($id);
        $data = $request->all();

        $dokter->update($data);
        return redirect()->route('dokter.index')->with('success', 'Dokter berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $dokter = Dokter::findOrFail($id);

        $dokter->delete();

        return redirect()->route('dokter.index')->with('success', 'Dokter berhasil dihapus.');
    }
}
