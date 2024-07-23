<?php

namespace App\Http\Controllers;

use App\Models\Jadwal_Konsultasi;
use Illuminate\Http\Request;

class JadwalKonsultasiController extends Controller
{
    public function index()
    {
        $jadwal_konsultasi = Jadwal_Konsultasi::all();
        return view('jadwal_konsultasi.index', compact('jadwal_konsultasi'));
    }

    public function create()
    {
        return view('jadwal_konsultasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_jadwal' => 'required',
            'NIK' => 'required',
            'nama' => 'required',
            'jam' => 'required',
            'hari' => 'required',
        ]);
        $data = $request->all();
        Jadwal_Konsultasi::create($data);

        return redirect()->route('jadwal_konsultasi.index')->with('success', 'Jadwal Konsultasi berhasil ditambahkan.');
    }

    public function edit(Jadwal_Konsultasi $jadwal_konsultasi)
    {
        return view('jadwal_konsultasi.edit', compact('jadwal_konsultasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_jadwal' => 'required',
            'NIK' => 'required',
            'nama' => 'required',
            'jam' => 'required',
            'hari' => 'required',
        ]);

        $jadwal_konsultasi = Jadwal_Konsultasi::findOrFail($id);
        $data = $request->all();

        $jadwal_konsultasi->update($data);
        return redirect()->route('jadwal_konsultasi.index')->with('success', 'Jadwal Konsultasi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jadwal_konsultasi = Jadwal_Konsultasi::findOrFail($id);

        $jadwal_konsultasi->delete();

        return redirect()->route('jadwal_konsultasi.index')->with('success', 'Jadwal Konsultasi berhasil dihapus.');
    }

}
