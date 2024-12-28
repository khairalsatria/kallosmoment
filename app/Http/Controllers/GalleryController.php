<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Barryvdh\DomPDF\Facade\Pdf;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallerys = Gallery::orderBy('id')->paginate(10);
        return view('admin.gallery.index', ['gallerys' => $gallerys]);
    }

    public function cetakPdf()
    {
        $pdf = PDF::loadView('admin.gallery.cetakpdf', ['gallerys' => Gallery::all()]);
        return $pdf->stream('Laporan-Data-Gallery.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'image_gallery' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Validasi gambar
            'text' => 'nullable|string|max:255',
        ]);

        // Proses upload image_gallery
        if ($request->hasFile('image_gallery')) {
            // Menyimpan gambar ke dalam folder public/gallery
            $path = $request->file('image_gallery')->store('gallery', 'public');
            $validated['image_gallery'] = $path; // Menyimpan path gambar ke dalam array validated
        }

        // Membuat gallery baru dengan data yang telah divalidasi
        Gallery::create($validated);

        return redirect('admin-gallery')->with('pesan', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'image_gallery' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'text' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image_gallery')) {
            // Menyimpan gambar ke dalam folder public/gallery
            $path = $request->file('image_gallery')->store('gallery', 'public');
            $validated['image_gallery'] = $path; // Menyimpan path gambar ke dalam array validated
        }

        Gallery::where('id', $id)->update($validated);
        return redirect('admin-gallery')->with('pesan', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Gallery::destroy($id);
        return redirect('admin-gallery')->with('pesan', 'Data berhasil dihapus');
    }
}
