<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judulBuku' => 'required',
            'keterangan' => 'required',
        ]);

        Buku::create($request->all());

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan');
    }

    public function show(Buku $buku)
    {
        return view('buku.show', compact('buku'));
    }

    public function edit(Buku $buku)
    {
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'judulBuku' => 'required',
            'keterangan' => 'required',
        ]);

        $buku->update($request->all());

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diubah');
    }

    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus');
    }
}
