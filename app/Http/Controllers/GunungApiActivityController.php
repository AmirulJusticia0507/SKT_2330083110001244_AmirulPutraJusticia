<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GunungApiActivity;

class GunungApiActivityController extends Controller
{
    //Fungsi Index Gunung Api
    public function index()
    {
        $gunungApiActivities = GunungApiActivity::orderBy('waktu_kejadian', 'desc')->get();
        return view('gunungapiactivity.index', compact('gunungApiActivities'));
    }

    public function create()
    {
        return view('GunungApiActivity.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'kedalaman' => 'required|numeric',
            'magnitude' => 'required|numeric',
            'waktu_kejadian' => 'required|date',
        ]);

        // Simpan data
        GunungApiActivity::create($request->all());

        return redirect()->route('GunungApiActivity.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $activity = GunungApiActivity::findOrFail($id);
        return view('GunungApiActivity.edit', compact('activity'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'kedalaman' => 'required|numeric',
            'magnitude' => 'required|numeric',
            'waktu_kejadian' => 'required|date',
        ]);

        // Update data
        GunungApiActivity::findOrFail($id)->update($request->all());

        return redirect()->route('GunungApiActivity.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Hapus data
        GunungApiActivity::findOrFail($id)->delete();

        return redirect()->route('GunungApiActivity.index')->with('success', 'Data berhasil dihapus.');
    }
}
