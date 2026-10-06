<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest('tanggal')->get();

        return view('admin.berita.index', compact('beritas'));
    }

    public function publicIndex()
    {
        $beritas = Berita::latest('tanggal')->get();

        return view('berita', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'gambar2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'gambar3' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'tanggal' => 'required|date',
            'kategori' => 'nullable|string|max:100',
        ]);

        $slug = Str::slug($request->judul);

        $baseSlug = $slug;
        $counter = 1;

        while (Berita::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        $validated['slug'] = $slug;

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request
                ->file('gambar')
                ->store('berita', 'public');
        }

        if ($request->hasFile('gambar2')) {
            $validated['gambar2'] = $request
                ->file('gambar2')
                ->store('berita', 'public');
        }

        if ($request->hasFile('gambar3')) {
            $validated['gambar3'] = $request
                ->file('gambar3')
                ->store('berita', 'public');
        }

        Berita::create($validated);

        return redirect()
            ->route('berita.index')
            ->with('success', 'Berita berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $berita = Berita::findOrFail($id);

        return view('admin.berita.show', compact('berita'));
    }

    public function edit(string $id)
    {
        $berita = Berita::findOrFail($id);

        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, string $id)
{
    $berita = Berita::findOrFail($id);

    $validated = $request->validate([
        'judul' => 'required|string|max:255',
        'isi' => 'required|string',
        'tanggal' => 'required|date',
        'kategori' => 'nullable|string|max:100',

        'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'gambar2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'gambar3' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    // Update data teks
    $berita->judul = $request->judul;
    $berita->isi = $request->isi;
    $berita->tanggal = $request->tanggal;
    $berita->kategori = $request->kategori;

    // Update gambar 1 jika ada gambar baru
    if ($request->hasFile('gambar')) {
        $berita->gambar = $request
            ->file('gambar')
            ->store('berita', 'public');
    }

    // Update gambar 2 jika ada gambar baru
    if ($request->hasFile('gambar2')) {
        $berita->gambar2 = $request
            ->file('gambar2')
            ->store('berita', 'public');
    }

    // Update gambar 3 jika ada gambar baru
    if ($request->hasFile('gambar3')) {
        $berita->gambar3 = $request
            ->file('gambar3')
            ->store('berita', 'public');
    }

    $berita->save();

    return redirect()
        ->route('berita.index')
        ->with('success', 'Berita berhasil diperbarui.');
}

    public function destroy(string $id)
{
    $berita = Berita::findOrFail($id);

    // Hapus gambar 1
    if ($berita->gambar) {
        Storage::disk('public')->delete($berita->gambar);
    }

    // Hapus gambar 2
    if ($berita->gambar2) {
        Storage::disk('public')->delete($berita->gambar2);
    }

    // Hapus gambar 3
    if ($berita->gambar3) {
        Storage::disk('public')->delete($berita->gambar3);
    }

    // Hapus data berita dari database
    $berita->delete();

    return redirect()
        ->route('berita.index')
        ->with('success', 'Berita berhasil dihapus.');
}
}