<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekstrakurikulers = Ekstrakurikuler::orderBy('urutan')->get();

        return view(
            'admin.ekstrakurikuler.index',
            compact('ekstrakurikulers')
        );
    }

    public function create()
    {
        return view('admin.ekstrakurikuler.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'icon' => 'nullable|string|max:100',
            'warna' => 'nullable|string|max:100',
            'urutan' => 'required|integer|min:0',
        ]);

        Ekstrakurikuler::create($validated);

        return redirect()
            ->route('ekstrakurikuler.index')
            ->with('success', 'Ekstrakurikuler berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        return view(
            'admin.ekstrakurikuler.show',
            compact('ekstrakurikuler')
        );
    }

    public function edit(string $id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        return view(
            'admin.ekstrakurikuler.edit',
            compact('ekstrakurikuler')
        );
    }

    public function update(Request $request, string $id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'icon' => 'nullable|string|max:100',
            'warna' => 'nullable|string|max:100',
            'urutan' => 'required|integer|min:0',
        ]);

        $ekstrakurikuler->update($validated);

        return redirect()
            ->route('ekstrakurikuler.index')
            ->with('success', 'Ekstrakurikuler berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        $ekstrakurikuler->delete();

        return redirect()
            ->route('ekstrakurikuler.index')
            ->with('success', 'Ekstrakurikuler berhasil dihapus.');
    }
}