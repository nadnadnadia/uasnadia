<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    public function index()
    {
        $pemeriksaan = Pemeriksaan::all();
        return view('pemeriksaan.index', compact('pemeriksaan'));
    }
    public function create()
    {
        return view('pemeriksaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_hasil' => 'required',
            'NIK' => 'required',
            'nama_dokter' => 'required',
            'tanggal' => 'required',
            'hasil' => 'required',
            'rekomendasi' => 'required',
            
        ]);
        $data = $request->all();
        Pemeriksaan::create($data);

        return redirect()->route('pemeriksaan.index')->with('success', 'Pemeriksaan berhasil ditambahkan.');
    }

    public function edit(Pemeriksaan $pemeriksaan)
    {
        return view('pemeriksaan.edit', compact('pemeriksaan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_hasil' => 'required',
            'NIK' => 'required',
            'nama_dokter' => 'required',
            'tanggal' => 'required',
            'hasil' => 'required',
            'rekomendasi' => 'required',
        ]);

        $pemeriksaan = Pemeriksaan::findOrFail($id);
        $data = $request->all();

        $pemeriksaan->update($data);

        return redirect()->route('pemeriksaan.index')->with('success', 'Pemeriksaan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pemeriksaan = Pemeriksaan::findOrFail($id);
        $pemeriksaan->delete();

        return redirect()->route('pemeriksaan.index')->with('success', 'Pemeriksaan berhasil dihapus.');
    }
}
