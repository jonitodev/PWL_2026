<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [];

        for ($barangId = 1; $barangId <= 15; $barangId++) {
            $rows[] = [
                'barang_id' => $barangId,
                'user_id' => 1,
                'stok_tanggal' => now()->subDays(15 - $barangId),
                'stok_jumlah' => rand(10, 50),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('t_stok')->insert($rows);
    }
}
