<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sarpras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SarprasController extends Controller
{
    public function index()
    {
        $sarpras = Sarpras::orderBy('urutan')->get();

        return view(
            'admin.sarpras.index',
            compact('sarpras')
        );
    }

    public function create()
    {
        return view('admin.sarpras.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'icon' => 'nullable|string|max:100',
            'deskripsi' => 'required|string',

            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'gambar2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'gambar3' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'urutan' => 'required|integer|min:0',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request
                ->file('gambar')
                ->store('sarpras', 'public');
        }

        if ($request->hasFile('gambar2')) {
            $validated['gambar2'] = $request
                ->file('gambar2')
                ->store('sarpras', 'public');
        }

        if ($request->hasFile('gambar3')) {
            $validated['gambar3'] = $request
                ->file('gambar3')
                ->store('sarpras', 'public');
        }

        Sarpras::create($validated);

        return redirect()
            ->route('sarpras.index')
            ->with('success', 'Data sarpras berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $sarpra = Sarpras::findOrFail($id);

        return view(
            'admin.sarpras.show',
            compact('sarpra')
        );
    }

    public function edit(string $id)
    {
        $sarpra = Sarpras::findOrFail($id);

        return view(
            'admin.sarpras.edit',
            compact('sarpra')
        );
    }

    public function update(Request $request, string $id)
    {
        $sarpra = Sarpras::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'icon' => 'nullable|string|max:100',
            'deskripsi' => 'required|string',

            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'gambar2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'gambar3' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'urutan' => 'required|integer|min:0',
        ]);

        if ($request->hasFile('gambar')) {

            if ($sarpra->gambar) {
                Storage::disk('public')->delete($sarpra->gambar);
            }

            $validated['gambar'] = $request
                ->file('gambar')
                ->store('sarpras', 'public');
        }

        if ($request->hasFile('gambar2')) {

            if ($sarpra->gambar2) {
                Storage::disk('public')->delete($sarpra->gambar2);
            }

            $validated['gambar2'] = $request
                ->file('gambar2')
                ->store('sarpras', 'public');
        }

        if ($request->hasFile('gambar3')) {

            if ($sarpra->gambar3) {
                Storage::disk('public')->delete($sarpra->gambar3);
            }

            $validated['gambar3'] = $request
                ->file('gambar3')
                ->store('sarpras', 'public');
        }

        $sarpra->update($validated);

        return redirect()
            ->route('sarpras.index')
            ->with('success', 'Data sarpras berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $sarpra = Sarpras::findOrFail($id);

        if ($sarpra->gambar) {
            Storage::disk('public')->delete($sarpra->gambar);
        }

        if ($sarpra->gambar2) {
            Storage::disk('public')->delete($sarpra->gambar2);
        }

        if ($sarpra->gambar3) {
            Storage::disk('public')->delete($sarpra->gambar3);
        }

        $sarpra->delete();

        return redirect()
            ->route('sarpras.index')
            ->with('success', 'Data sarpras berhasil dihapus.');
    }
}