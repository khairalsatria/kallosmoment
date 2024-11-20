<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalKerja;
use Barryvdh\DomPDF\Facade\Pdf;

class JadwalKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwalKerjas = JadwalKerja::orderBy('tanggal_event')->paginate(10);
        return view('admin.jadwal_kerja.index', ['jadwalKerjas' => $jadwalKerjas]);
    }

    public function cetakPdf()
    {
        $pdf = PDF::loadView('admin.jadwal_kerja.cetakpdf', ['jadwalKerjas' => JadwalKerja::all()]);
        return $pdf->stream('Laporan-Data-Jadwal-Kerja.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jadwal_kerja.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_klien' => 'required|string|max:255',
            'nama_kategori' => 'required|string|max:255',
            'tanggal_event' => 'required|date',
            'alamat_event' => 'required|string|max:255',
            'catatan' => 'nullable|string',
            'status' => 'required|string|max:50',
        ]);
        JadwalKerja::create($validated);
        return redirect('admin-jadwal_kerja')->with('pesan', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jadwalKerja = JadwalKerja::findOrFail($id);
        return view('admin.jadwal_kerja.show', compact('jadwalKerja'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jadwalKerja = JadwalKerja::find($id);
        return view('admin.jadwal_kerja.edit', compact('jadwalKerja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_klien' => 'required|string|max:255',
            'nama_kategori' => 'required|string|max:255',
            'tanggal_event' => 'required|date',
            'alamat_event' => 'required|string|max:255',
            'catatan' => 'nullable|string',
            'status' => 'required|string|max:50',
        ]);
        JadwalKerja::where('id', $id)->update($validated);
        return redirect('admin-jadwal_kerja')->with('pesan', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        JadwalKerja::destroy($id);
        return redirect('admin-jadwal_kerja')->with('pesan', 'Data berhasil dihapus');
    }
}
