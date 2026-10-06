<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasis = Prestasi::orderBy('tahun', 'desc')->get();

        return view('admin.prestasi.index', compact('prestasis'));
    }

    public function create()
    {
        return view('admin.prestasi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'nama' => 'required|string',
            'tingkat' => 'required|string|max:255',
            'tahun' => 'required|integer|min:2000|max:2100',
            'kategori' => 'required|in:Akademik,Non Akademik',
        ]);

        Prestasi::create($validated);

        return redirect()
            ->route('prestasi.index')
            ->with('success', 'Prestasi berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $prestasi = Prestasi::findOrFail($id);

        return view('admin.prestasi.show', compact('prestasi'));
    }

    public function edit(string $id)
    {
        $prestasi = Prestasi::findOrFail($id);

        return view('admin.prestasi.edit', compact('prestasi'));
    }

    public function update(Request $request, string $id)
    {
        $prestasi = Prestasi::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'nama' => 'required|string',
            'tingkat' => 'required|string|max:255',
            'tahun' => 'required|integer|min:2000|max:2100',
            'kategori' => 'required|in:Akademik,Non Akademik',
        ]);

        $prestasi->update($validated);

        return redirect()
            ->route('prestasi.index')
            ->with('success', 'Prestasi berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $prestasi = Prestasi::findOrFail($id);

        $prestasi->delete();

        return redirect()
            ->route('prestasi.index')
            ->with('success', 'Prestasi berhasil dihapus.');
    }
}