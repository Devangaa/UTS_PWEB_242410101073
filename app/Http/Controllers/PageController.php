<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    // Nangkep nama dari form login
    public function prosesLogin(Request $request) {
       // 1. Ambil input dari form
        $credentials = $request->only('name', 'password'); // Pakai 'name' karena di DB Laragon biasanya 'name'

        // 2. Cek ke Database (Otomatis ngecek username & password yg di-bcrypt)
        if (Auth::attempt(['name' => $request->username, 'password' => $request->password])) {
            
            // Jika berhasil, ambil nama user buat dilempar ke route
            $user = Auth::user()->name;
            return redirect()->route('dashboard', ['username' => $user]);
        }

        // 3. Jika gagal, balikkan ke login dengan pesan error
        return back()->with('error', 'Username atau Password salah!');
    }

    public function dashboard($username) {
        return view('dashboard', ['username' => $username]);
    }

    public function profile($username) {
        return view('profile', ['username' => $username]);
    }

    // Halaman Pengelolaan dengan DATA ARRAY
    public function pengelolaan($username) {
        $daftarProduk = [
            [
                'nama' => 'Airu Signature Blue',
                'stok' => 45,
                'kategori' => 'Botol Kaca',
                'rak' => 'A1'
            ],
            [
                'nama' => 'Airu Sunset Orange',
                'stok' => 12,
                'kategori' => 'Botol Plastik',
                'rak' => 'B3'
            ],
            [
                'nama' => 'Airu Frost White',
                'stok' => 0,
                'kategori' => 'Botol Stainless',
                'rak' => 'A2'
            ],
            [
                'nama' => 'Airu Kids Edition',
                'stok' => 100,
                'kategori' => 'Botol Mini',
                'rak' => 'C1'
            ],
        ];

        // Kirim data username dan daftarProduk ke view
        return view('pengelolaan', [
            'username' => $username,
            'produk' => $daftarProduk
        ]);
    }
}