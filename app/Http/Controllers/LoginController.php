<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function index()
    {
        return view('admin.akun.login'); // Pastikan view ini ada
    }

    // Mengautentikasi pengguna
    public function authenticate(Request $request): RedirectResponse
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Mencoba untuk login
        if (Auth::attempt($credentials)) {
            // Regenerasi session
            $request->session()->regenerate();

            $user = Auth::user();
            // Menyimpan role pengguna dalam session
            $request->session()->put('role', $user->isAdmin == 2 ? 'pelanggan' : 'admin');

            // Redirect berdasarkan role
            if ($user->isAdmin == 2) {
                return redirect()->intended('kallos-moments'); // Redirect pelanggan
            } else {
                return redirect()->intended('admin/dashboard'); // Redirect admin
            }
        }

        // Jika login gagal
        return back()->withErrors([
            'email' => 'Akun tidak ditemukan. Pastikan email dan password anda benar.',
        ])->onlyInput('email');
    }


    // Logout pengguna
    public function logout(Request $request)
    {
        Auth::logout(); // Logout pengguna
        $request->session()->invalidate(); // Menghapus session
        $request->session()->regenerateToken(); // Regenerasi token CSRF

        return redirect('kallos-moments'); // Redirect ke halaman home
    }
    
}
