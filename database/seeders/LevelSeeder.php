<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        $levels = [
            [
                'level_id' => 1,
                'level_kode' => 'ADM',
                'level_nama' => 'Administrator',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'level_id' => 2,
                'level_kode' => 'WAG',
                'level_nama' => 'Manager',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'level_id' => 3,
                'level_kode' => 'STF',
                'level_nama' => 'Staff/Kasir',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        DB::table('m_level')->upsert(
            $levels,
            ['level_id'],
            ['level_kode', 'level_nama', 'updated_at']
        );
    }
}
