<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run() {
        // Isi User untuk login
        \App\Models\User::create([
            'name' => 'Admin Airu',
            'email' => 'admin@airu.com',
            'password' => bcrypt('password123')
        ]);

        // Isi Produk
        \App\Models\Product::insert([
            ['nama_produk' => 'Airu Blue Sky', 'stok' => 20, 'kategori' => 'Kaca'],
            ['nama_produk' => 'Airu Sunset Orange', 'stok' => 15, 'kategori' => 'Plastik']
        ]);
    }
}
