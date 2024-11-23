<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Kategori; // Pastikan Anda memiliki model Kategori
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PemesananController extends Controller
{
    public function create() {
        $kategoris = Kategori::all();
        $tanggal_event_terdaftar = Pemesanan::pluck('tanggal_event')->toArray(); // Ambil semua tanggal event yang sudah ada
        return view('pemesanan.create', compact('kategoris', 'tanggal_event_terdaftar'));
    }
    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email',
        'nohp' => 'required|string',
        'kategori_id' => 'required|exists:kategoris,id',
        'tanggal_event' => 'required|date',
        'alamat_event' => 'required|string',
    ]);

    $kategori = Kategori::find($request->kategori_id);

    $pemesanan = Pemesanan::create([
        'nama' => $request->nama,
        'email' => $request->email,
        'nohp' => $request->nohp,
        'tanggal_event' => $request->tanggal_event,
        'nama_kategori' => $kategori->nama_kategori,
        'harga' => $kategori->harga,
        'alamat_event' => $request->alamat_event,
        'status_pemesanan' => 'pending', // Status awal
    ]);

    return redirect()->route('pemesanan.detail', $pemesanan->id); // Pastikan ini ada
}

    public function detail($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        return view('pemesanan.detail', compact('pemesanan'));
    }

    public function uploadBukti(Request $request, $id)
    {
        $request->validate([
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $pemesanan = Pemesanan::findOrFail($id);
        $path = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');

        $pemesanan->bukti_pembayaran = $path;
        $pemesanan->save();

        return redirect()->route('pemesanan.riwayat')->with('success', 'Bukti pembayaran berhasil diupload.');
    }

    public function riwayat()
    {
        // Ambil email pengguna yang sedang login
        $email = Auth::user()->email;

        // Ambil semua pemesanan berdasarkan email pengguna
        $riwayat = Pemesanan::where('email', $email)->get();

        return view('pemesanan.riwayat', compact('riwayat'));
    }

    public function info($id) {
        $pemesanan = Pemesanan::findOrFail($id);
        return view('pemesanan.info', compact('pemesanan'));
    }
}
