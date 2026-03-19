<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [];
        $kategoriIds = [1, 2, 3, 4, 5];

        for ($supplierId = 1; $supplierId <= 3; $supplierId++) {
            for ($i = 1; $i <= 5; $i++) {
                $index = (($supplierId - 1) * 5) + $i;
                $items[] = [
                    'kategori_id' => $kategoriIds[($index - 1) % count($kategoriIds)],
                    'supplier_id' => $supplierId,
                    'barang_kode' => 'BRG' . str_pad((string) $index, 3, '0', STR_PAD_LEFT),
                    'barang_nama' => 'Barang ' . $index,
                    'harga_beli' => 5000 + ($index * 1000),
                    'harga_jual' => 7000 + ($index * 1200),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('m_barang')->insert($items);
    }
}
