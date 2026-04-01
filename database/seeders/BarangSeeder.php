<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $items = [];

        for ($id = 1; $id <= 15; $id++) {
            $purchasePrice = 10000 + ($id * 1000);

            $items[] = [
                'barang_id' => $id,
                'kategori_id' => (($id - 1) % 5) + 1,
                'barang_kode' => sprintf('BRG%03d', $id),
                'barang_nama' => sprintf('Barang %02d', $id),
                'harga_beli' => $purchasePrice,
                'harga_jual' => $purchasePrice + 3000,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        DB::table('m_barang')->upsert(
            $items,
            ['barang_id'],
            ['kategori_id', 'barang_kode', 'barang_nama', 'harga_beli', 'harga_jual', 'updated_at']
        );
    }
}
