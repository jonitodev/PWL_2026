<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $sales = [];

        for ($id = 1; $id <= 10; $id++) {
            $sales[] = [
                'penjualan_id' => $id,
                'user_id' => (($id - 1) % 3) + 1,
                'penjualan_kode' => sprintf('TRX%03d', $id),
                'pembeli' => sprintf('Pelanggan %02d', $id),
                'penjualan_tanggal' => $now->copy()->subDays(10 - $id),
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        DB::table('t_penjualan')->upsert(
            $sales,
            ['penjualan_id'],
            ['user_id', 'penjualan_kode', 'pembeli', 'penjualan_tanggal', 'updated_at']
        );
    }
}
