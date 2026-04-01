<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $stocks = [];

        for ($id = 1; $id <= 15; $id++) {
            $stocks[] = [
                'stok_id' => $id,
                'barang_id' => $id,
                'user_id' => (($id - 1) % 3) + 1,
                'stok_tanggal' => $now->copy()->subDays(15 - $id),
                'stok_jumlah' => 20 + $id,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        DB::table('t_stok')->upsert(
            $stocks,
            ['stok_id'],
            ['barang_id', 'user_id', 'stok_tanggal', 'stok_jumlah', 'updated_at']
        );
    }
}
