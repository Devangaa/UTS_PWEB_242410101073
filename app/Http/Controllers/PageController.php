<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    public function prosesLogin(Request $request) {
        // ambil input dari view
        $username = $request->input('username');
        $password = $request->input('password');

        $users = [
            ['username' => 'admin', 'password' => 'admin123', 'nama_lengkap' => 'Admin Airu']
        ];

        // cek PW
        foreach ($users as $u) {
            if ($u['username'] == $username && $u['password'] == $password) {
                return redirect()->route('dashboard', ['username' => $u['nama_lengkap']]);
            }
        }

        // PW salah
        return back()->with('error', 'Username atau Password salah!')->withInput();
    }

    public function dashboard($username) {
        return view('dashboard', ['username' => $username]);
    }

    public function profile($username) {
        return view('profile', ['username' => $username]);
    }

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

        return view('pengelolaan', [
            'username' => $username,
            'produk' => $daftarProduk
        ]);
    }
}