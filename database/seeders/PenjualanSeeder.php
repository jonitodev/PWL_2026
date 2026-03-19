<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [];

        for ($i = 1; $i <= 10; $i++) {
            $rows[] = [
                'user_id' => 3,
                'penjualan_kode' => 'TRX' . str_pad((string) $i, 4, '0', STR_PAD_LEFT),
                'pembeli' => 'Pembeli ' . $i,
                'penjualan_tanggal' => now()->subDays(10 - $i),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('t_penjualan')->insert($rows);
    }
}
