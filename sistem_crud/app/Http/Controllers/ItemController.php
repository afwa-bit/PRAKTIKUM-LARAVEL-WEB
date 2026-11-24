<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::latest()->get();

        return view('items.index', [
            'judul' => 'Manajemen Data CRUD',
            'subjudul' => 'Tambah, lihat, ubah, dan hapus data',
            'items' => $items,
        ]);
    }

    public function create()
    {
        return view('items.create', [
            'judul' => 'Tambah Data',
            'subjudul' => 'Input data baru ke database',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:120',
            'kategori' => 'required|string|max:80',
            'jumlah' => 'required|integer|min:0',
            'catatan' => 'nullable|string',
        ]);

        Item::create($validated);

        return redirect()->route('items.index')->with('sukses', 'Data berhasil ditambahkan.');
    }

    public function edit(Item $item)
    {
        return view('items.edit', [
            'judul' => 'Edit Data',
            'subjudul' => 'Perbarui data yang dipilih',
            'item' => $item,
        ]);
    }

    public function update(Request $request, Item $item)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:120',
            'kategori' => 'required|string|max:80',
            'jumlah' => 'required|integer|min:0',
            'catatan' => 'nullable|string',
        ]);

        $item->update($validated);

        return redirect()->route('items.index')->with('sukses', 'Data berhasil diperbarui.');
    }

    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('items.index')->with('sukses', 'Data berhasil dihapus.');
    }
}