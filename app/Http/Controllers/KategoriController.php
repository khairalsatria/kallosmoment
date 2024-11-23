<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Barryvdh\DomPDF\Facade\Pdf;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::orderBy('kode_kategori')->paginate(10);
        return view('admin.kategori.index', ['kategoris' => $kategoris]);
    }

    public function cetakPdf()
    {
        $pdf = PDF::loadView('admin.kategori.cetakpdf', ['kategoris' => Kategori::all()]);
        return $pdf->stream('Laporan-Data-Kategori.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('admin.kategori.create');
}

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'kode_kategori' => 'required|string|unique:kategoris',
        'nama_kategori' => 'required|string|max:255',
        'harga' => 'required|numeric|min:0',
        'gambar_kategori' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validasi gambar kategori
    ]);

    // Proses upload gambar_kategori jika ada
    if ($request->hasFile('gambar_kategori')) {
        // Menyimpan gambar ke dalam folder public/bukti_pembayaran
        $path = $request->file('gambar_kategori')->store('packages', 'public');
        $validated['gambar_kategori'] = $path; // Menyimpan path gambar ke dalam array validated
    }

    // Membuat kategori baru dengan data yang telah divalidasi
    Kategori::create($validated);

    return redirect('admin-kategori')->with('pesan', 'Data berhasil ditambahkan');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('admin.kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = Kategori::find($id);
        return view('admin.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'kode_kategori' => 'required|string|max:10',
            'nama_kategori' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'gambar_kategori' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar_kategori')) {
            // Menyimpan gambar ke dalam folder public/bukti_pembayaran
            $path = $request->file('gambar_kategori')->store('packages', 'public');
            $validated['gambar_kategori'] = $path; // Menyimpan path gambar ke dalam array validated
        }

        Kategori::where('id', $id)->update($validated);
        return redirect('admin-kategori')->with('pesan', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kategori::destroy($id);
        return redirect('admin-kategori')->with('pesan', 'Data berhasil dihapus');
    }


}
