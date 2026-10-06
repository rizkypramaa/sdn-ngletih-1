<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest('tanggal')->get();

        return view('admin.galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'tanggal' => 'nullable|date',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request
                ->file('gambar')
                ->store('galeri', 'public');
        }

        Galeri::create($validated);

        return redirect()
            ->route('galeri.index')
            ->with('success', 'Galeri berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $galeri = Galeri::findOrFail($id);

        return view('admin.galeri.show', compact('galeri'));
    }

    public function edit(string $id)
    {
        $galeri = Galeri::findOrFail($id);

        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, string $id)
    {
        $galeri = Galeri::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'tanggal' => 'nullable|date',
        ]);

        $galeri->judul = $request->judul;
        $galeri->deskripsi = $request->deskripsi;
        $galeri->tanggal = $request->tanggal;

        if ($request->hasFile('gambar')) {

            if ($galeri->gambar) {
                Storage::disk('public')->delete($galeri->gambar);
            }

            $galeri->gambar = $request
                ->file('gambar')
                ->store('galeri', 'public');
        }

        $galeri->save();

        return redirect()
            ->route('galeri.index')
            ->with('success', 'Galeri berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $galeri = Galeri::findOrFail($id);

        if ($galeri->gambar) {
            Storage::disk('public')->delete($galeri->gambar);
        }

        $galeri->delete();

        return redirect()
            ->route('galeri.index')
            ->with('success', 'Galeri berhasil dihapus.');
    }
}