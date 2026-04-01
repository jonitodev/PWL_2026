<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $details = [];
        $detailId = 1;

        for ($saleId = 1; $saleId <= 10; $saleId++) {
            for ($itemOffset = 0; $itemOffset < 3; $itemOffset++) {
                $itemId = (($saleId - 1) * 3 + $itemOffset) % 15 + 1;
                $price = 10000 + ($itemId * 1000) + 3000;

                $details[] = [
                    'detail_id' => $detailId,
                    'penjualan_id' => $saleId,
                    'barang_id' => $itemId,
                    'harga' => $price,
                    'jumlah' => $itemOffset + 1,
                    'created_at' => $now,
                    'updated_at' => $now,
                ];

                $detailId++;
            }
        }

        DB::table('t_penjualan_detail')->upsert(
            $details,
            ['detail_id'],
            ['penjualan_id', 'barang_id', 'harga', 'jumlah', 'updated_at']
        );
    }
}
