<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $categories = [
            ['id' => 1, 'kategori_kode' => 'SNK', 'kategori_nama' => 'Snack/Makanan Ringan', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'kategori_kode' => 'MNM', 'kategori_nama' => 'Minuman', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'kategori_kode' => 'BKS', 'kategori_nama' => 'Bahan Masak', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 4, 'kategori_kode' => 'KBG', 'kategori_nama' => 'Kebutuhan Rumah Tangga', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 5, 'kategori_kode' => 'PRS', 'kategori_nama' => 'Perawatan Pribadi', 'created_at' => $now, 'updated_at' => $now],
        ];

        DB::table('m_kategori')->upsert(
            $categories,
            ['id'],
            ['kategori_kode', 'kategori_nama', 'updated_at']
        );
    }
}
