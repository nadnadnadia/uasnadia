<?php

namespace App\Http\Controllers;

use App\Models\Rekam_Medis;
use Illuminate\Http\Request;

class RekamMedisController extends Controller
{
    public function index()
    {
        $rekam_medis = Rekam_Medis::all();
        return view('rekam_medis.index', compact('rekam_medis'));
    }

    public function create()
    {
        return view('rekam_medis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_rekammedis' => 'required',
            'nama' => 'required',
            'riwayat' => 'required',
            'catatan' => 'required',
        ]);
        $data = $request->all();
        Rekam_Medis::create($data);

        return redirect()->route('rekam_medis.index')->with('success', 'Rekam Medis berhasil ditambahkan.');
    }

    public function edit(Rekam_Medis $rekam_Medis)
    {
        return view('rekam_medis.edit', compact('rekam_medis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_rekammedis' => 'required',
            'nama' => 'required',
            'riwayat' => 'required',
            'catatan' => 'required',
        ]);

        $rekam_medis = Rekam_Medis::findOrFail($id);
        $data = $request->all();

        $rekam_medis->update($data);
        return redirect()->route('rekam_medis.index')->with('success', 'Rekam Medis berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $rekam_medis = Rekam_Medis::findOrFail($id);

        $rekam_medis->delete();

        return redirect()->route('rekam_medis.index')->with('success', 'Rekam Medis berhasil dihapus.');
    }

}
