<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_kategori')->insert([
            ['kategori_kode' => 'MNM', 'kategori_nama' => 'Minuman', 'created_at' => now(), 'updated_at' => now()],
            ['kategori_kode' => 'MKN', 'kategori_nama' => 'Makanan', 'created_at' => now(), 'updated_at' => now()],
            ['kategori_kode' => 'SNK', 'kategori_nama' => 'Snack', 'created_at' => now(), 'updated_at' => now()],
            ['kategori_kode' => 'ATK', 'kategori_nama' => 'Alat Tulis', 'created_at' => now(), 'updated_at' => now()],
            ['kategori_kode' => 'KBT', 'kategori_nama' => 'Kebutuhan Harian', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
