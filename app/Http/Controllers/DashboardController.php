<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use App\Models\JadwalKerja;
use App\Models\Pemesanan;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil data dari model
        $keuangan = Keuangan::all(); // Ambil semua data keuangan
        $jadwalKerja = JadwalKerja::where('tanggal_event', '>=', now())->orderBy('tanggal_event')->first(); // Ambil jadwal terdekat
        $pemesanan = Pemesanan::all(); // Ambil semua pemesanan
        $users = User::all(); // Ambil semua user
        $kategori = Kategori::all(); // Ambil semua kategori

        // Menghitung total pendapatan dan pengeluaran
        $keuangans = Keuangan::orderBy('tanggal', 'asc')->get();

        // Hitung total pendapatan
        $totalPendapatan = $keuangans->sum('pendapatan');

        // Hitung total pengeluaran
        $totalPengeluaran = $keuangans->sum('pengeluaran');

        // Hitung saldo (total pendapatan - total pengeluaran)
        $saldo = $totalPendapatan - $totalPengeluaran;

        // Menghitung jumlah user dengan role pelanggan
        $jumlahPelanggan = User::where('role', 'pelanggan')->count();

        // Menghitung jumlah pemesanan
        $jumlahPemesanan = $pemesanan->count();

        // Menghitung total kategori
        $totalKategori = $kategori->count();

        // Menghitung total data keuangan
        $totalKeuangan = $keuangan->count();

        // Ambil alamat event dari jadwal terdekat
        $alamatEvent = $jadwalKerja ? $jadwalKerja->alamat_event : 'Tidak ada jadwal event terdekat';

        // Mengirim data ke view
        return view('admin.dashboard', [
            'keuangan' => $keuangan,
            'jadwalKerja' => $jadwalKerja,
            'pemesanan' => $pemesanan,
            'users' => $users,
            'kategori' => $kategori,
            'jumlahPelanggan' => $jumlahPelanggan, // Kirim jumlah pelanggan ke view
            'jumlahPemesanan' => $jumlahPemesanan, // Kirim jumlah pemesanan ke view
            'totalKategori' => $totalKategori, // Kirim total kategori ke view
            'totalKeuangan' => $totalKeuangan, // Kirim total data keuangan ke view
            'keuangans' => $keuangans,          // Semua data keuangan
            'totalPendapatan' => $totalPendapatan,  // Total pendapatan
            'totalPengeluaran' => $totalPengeluaran, // Total pengeluaran
            'saldo' => $saldo,                  // Saldo
            'alamatEvent' => $alamatEvent,      // Alamat event terdekat
        ]);
    }
}
