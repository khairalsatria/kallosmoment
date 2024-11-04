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
        $validated = $request->validate([
            'kode_kategori' => 'required|string|unique:kategoris',
            'nama_kategori' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
        ]);
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
        ]);
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
