<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [];

        for ($penjualanId = 1; $penjualanId <= 10; $penjualanId++) {
            for ($j = 1; $j <= 3; $j++) {
                $barangId = (($penjualanId - 1) * 3 + $j);
                if ($barangId > 15) {
                    $barangId = (($barangId - 1) % 15) + 1;
                }

                $harga = DB::table('m_barang')->where('barang_id', $barangId)->value('harga_jual') ?? 10000;

                $rows[] = [
                    'penjualan_id' => $penjualanId,
                    'barang_id' => $barangId,
                    'harga' => $harga,
                    'jumlah' => rand(1, 4),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($rows);
    }
}
