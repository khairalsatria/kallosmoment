<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\JadwalKerja;
use App\Models\Keuangan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
{
    $pemesanans = Pemesanan::all(); // Ambil semua pemesanan
    return view('admin.pemesanan.index', compact('pemesanans'));
}

    public function konfirmasi($id)
{
    $pemesanan = Pemesanan::findOrFail($id);
    $pemesanan->status_pemesanan = 'dp lunas'; // Ubah status menjadi 'dp lunas'
    $pemesanan->save();

    // Simpan data pemesanan ke tabel jadwal_kerjas
    $jadwalKerja = JadwalKerja::create([
        'nama_klien' => $pemesanan->nama,
        'nama_kategori' => $pemesanan->nama_kategori,
        'tanggal_event' => $pemesanan->tanggal_event,
        'alamat_event' => $pemesanan->alamat_event,
        'status' => 'soon', // Tambahkan status 'soon'
    ]);

    Keuangan::create([
        'tanggal' => now(), // Menggunakan tanggal dan waktu saat ini
        'deskripsi' => 'DP untuk pemesanan a/n ' . $pemesanan->nama,
        'kategori' => $pemesanan->nama_kategori,
        'pendapatan' => $pemesanan->harga * 0.5, // Asumsikan ada kolom 'dp' di model Pemesanan
        'pengeluaran' => 0, // Atau hitung saldo sesuai kebutuhan
    ]);

    return redirect()->route('admin.pemesanan.index')->with('success', 'Pemesanan berhasil dikonfirmasi.');
    }

    public function done($id)
    {
    $pemesanan = Pemesanan::findOrFail($id);
    $pemesanan->status_pemesanan = 'done'; // Ubah status menjadi 'done'
    $pemesanan->save();

    // Update status pada jadwal kerja yang terkait
    // $jadwalKerja = JadwalKerja::where('nama_klien', $pemesanan->nama)
    //     ->where('tanggal_event', $pemesanan->tanggal_event)
    //     ->first();

    // if ($jadwalKerja) {
    //     $jadwalKerja->status = 'done'; // Ubah status menjadi 'done'
    //     $jadwalKerja->save();
    // }

    // Update entri keuangan yang terkait dengan pemesanan
    $keuangan = Keuangan::where('deskripsi', 'DP untuk pemesanan a/n ' . $pemesanan->nama)
        ->where('kategori', $pemesanan->nama_kategori)
        ->first();

    if ($keuangan) {
        $keuangan->deskripsi = 'Pembayaran lunas untuk pemesanan a/n ' . $pemesanan->nama . ''; // Ubah deskripsi
        $keuangan->tanggal = now();  // Menggunakan tanggal dan waktu saat ini
        $keuangan->pendapatan = $pemesanan->harga; // Ubah pendapatan menjadi harga penuh
        $keuangan->save();
    }

    return redirect()->route('admin.pemesanan.index')->with('success', 'Pemesanan berhasil diselesaikan.');
}
    public function hapus($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->delete();

        return redirect()->route('admin.pemesanan.index')->with('success', 'Pemesanan berhasil dihapus.');
    }
}
