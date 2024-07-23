<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obat = Obat::all();
        return view('obat.index', compact('obat'));
    }

    public function create()
    {
        return view('obat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_obat' => 'required',
            'nama_obat' => 'required',
            'kategori' => 'required',
            'stok' => 'required',
        ]);
        $data = $request->all();
        Obat::create($data);

        return redirect()->route('obat.index')->with('success', 'obat berhasil ditambahkan.');
    }

    public function edit(Obat $obat)
    {
        return view('obat.edit', compact('obat'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_obat' => 'required',
            'nama_obat' => 'required',
            'kategori' => 'required',
            'stok' => 'required',
        ]);

        $obat = Obat::findOrFail($id);
        $data = $request->all();

        $obat->update($data);
        return redirect()->route('obat.index')->with('success', 'Obat berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);

        $obat->delete();

        return redirect()->route('obat.index')->with('success', 'Obat berhasil dihapus.');
    }
}