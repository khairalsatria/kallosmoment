<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keuangan;
use Barryvdh\DomPDF\Facade\Pdf;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keuangans = Keuangan::orderBy('tanggal', 'desc')->paginate(10);
        return view('admin.keuangan.index', ['keuangans' => $keuangans]);
    }

    public function cetakPdf()
    {
        $pdf = PDF::loadView('admin.keuangan.cetakpdf', ['keuangans' => Keuangan::all()]);
        return $pdf->stream('Laporan-Data-Keuangan.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.keuangan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'deskripsi' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'pendapatan' => 'nullable|numeric|min:0',
            'pengeluaran' => 'nullable|numeric|min:0',
            'saldo' => 'nullable|numeric|min:0',
            'catatan' => 'nullable|string',
        ]);

        Keuangan::create($validated);
        return redirect('admin-keuangan')->with('pesan', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $keuangan = Keuangan::findOrFail($id);
        return view('admin.keuangan.show', compact('keuangan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $keuangan = Keuangan::find($id);
        return view('admin.keuangan.edit', compact('keuangan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'deskripsi' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'pendapatan' => 'nullable|numeric|min:0',
            'pengeluaran' => 'nullable|numeric|min:0',
            'saldo' => 'nullable|numeric|min:0',
            'catatan' => 'nullable|string',
        ]);

        Keuangan::where('id', $id)->update($validated);
        return redirect('admin-keuangan')->with('pesan', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Keuangan::destroy($id);
        return redirect('admin-keuangan')->with('pesan', 'Data berhasil dihapus');
    }
}
