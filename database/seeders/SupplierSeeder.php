<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $suppliers = [];

        for ($id = 1; $id <= 3; $id++) {
            $suppliers[] = [
                'id' => $id,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        DB::table('supplier')->upsert(
            $suppliers,
            ['id'],
            ['updated_at']
        );
    }
}
