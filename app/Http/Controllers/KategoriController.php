<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{

    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.kategori.index', compact('kategori'));
    }

    public function create()
    {
        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required',
            'deskripsi' => 'required'
        ]);

        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->deskripsi = $request->deskripsi;

        $kategori->save();
        return redirect()->route('kategori.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('admin.kategori.show', compact('kategori'));
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('admin.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|max:255',
            'deskripsi' => 'required',
        ]);

        $kategori = Kategori::findorFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->deskripsi = $request->deskripsi;
        $kategori->save();

        return redirect()->route('kategori.index')
            ->with('success', 'data berhasil diubah');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategori.index')
            ->with('success', 'data berhasil dihapus');
    }
}
