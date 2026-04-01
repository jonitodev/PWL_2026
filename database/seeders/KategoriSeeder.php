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
        $categories = [];

        for ($id = 1; $id <= 5; $id++) {
            $categories[] = [
                'id' => $id,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        DB::table('m_kategori')->upsert(
            $categories,
            ['id'],
            ['updated_at']
        );
    }
}
