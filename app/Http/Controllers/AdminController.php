<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\JadwalKerja;
use App\Models\Keuangan;
use App\Models\Kategori;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(Request $request)
{
    // Ambil parameter bulan dari request, jika ada
    $bulan = $request->input('bulan');
    $tahun = $request->input('tahun');

    // Query data pemesanans
    $query = Pemesanan::orderBy('created_at', 'desc'); // Mengurutkan berdasarkan waktu pembuatan terbaru

    // Jika bulan disediakan, filter berdasarkan bulan
    if ($bulan) {
        $query->whereMonth('created_at', $bulan);
    }

    // Jika tahun disediakan, filter berdasarkan tahun
    if ($tahun) {
        $query->whereYear('created_at', $tahun);
    }

    $pemesanan = $query->paginate(10);

    return view('admin.pemesanan.index', [
        'pemesanans' => $pemesanan,
        'bulan' => $bulan, // Untuk referensi di view
        'tahun' => $tahun  // Untuk referensi di view
    ]);
}
    public function konfirmasi($id)
{
    $pemesanan = Pemesanan::findOrFail($id);
    $pemesanan->status_pemesanan = 'dp lunas'; // Ubah status menjadi 'dp lunas'
    $pemesanan->save();

    // Simpan data pemesanan ke tabel jadwal_kerjas
    JadwalKerja::create([
        'nama_klien' => $pemesanan->nama,
        'nama_kategori' => $pemesanan->nama_kategori,
        'tanggal_event' => $pemesanan->tanggal_event,
        'alamat_event' => $pemesanan->alamat_event,
        'status' => 'soon', // Tambahkan status 'soon'
    ]);

    Keuangan::create([
        'tanggal' => now(), // Menggunakan tanggal dan waktu saat ini
        'tanggal_event' => $pemesanan->tanggal_event,
        'deskripsi' => 'DP untuk pemesanan a/n ' . $pemesanan->nama,
        'kategori' => $pemesanan->nama_kategori,
        'pendapatan' => $pemesanan->harga * 0.5, // Asumsikan ada kolom 'dp' di model Pemesanan
        'pengeluaran' => 0, // Atau hitung saldo sesuai kebutuhan
        'keterangan' => 'Pembayaran DP', // Atau hitung saldo sesuai kebutuhan
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
        $keuangan->keterangan = 'Pelunasan'; // Ubah pendapatan menjadi harga penuh

        $keuangan->save();
    }

    return redirect()->route('admin.pemesanan.index')->with('success', 'Pemesanan berhasil diselesaikan.');
}
public function hapus($id)
{
    // Temukan pemesanan berdasarkan ID
    $pemesanan = Pemesanan::findOrFail($id);

    // Debug: Tampilkan deskripsi dan kategori

    // Hapus entri terkait di tabel keuangan
    Keuangan::where('deskripsi', 'Pembayaran lunas untuk pemesanan a/n ' . $pemesanan->nama)
        ->where('kategori', $pemesanan->nama_kategori)
        ->where('tanggal_event', $pemesanan->tanggal_event)
        ->delete();

    // Hapus entri terkait di tabel jadwal_kerja
    JadwalKerja::where('nama_klien', $pemesanan->nama)
        ->where('tanggal_event', $pemesanan->tanggal_event)
        ->delete();

    // Hapus pemesanan itu sendiri
    $pemesanan->delete();

    return redirect()->route('admin.pemesanan.index')->with('success', 'Pemesanan berhasil dihapus.');
}

public function show()
{
    $user = Auth::user();
    return view('admin.profile.show', compact('user'));
}

public function edit()
{
    $user = Auth::user();
    return view('admin.profile.edit', compact('user'));
}

public function update(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'nohp' => 'nullable|string|max:15',
    ]);

    $user = Auth::user();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->nohp = $request->nohp;
    $user->save();

    return redirect()->route('admin.profile.edit')->with('success', 'Profil berhasil diperbarui.');
}
}
