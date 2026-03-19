<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_supplier')->insert([
            ['supplier_kode' => 'SUP01', 'supplier_nama' => 'PT Sumber Makmur', 'supplier_alamat' => 'Malang', 'created_at' => now(), 'updated_at' => now()],
            ['supplier_kode' => 'SUP02', 'supplier_nama' => 'CV Berkah Jaya', 'supplier_alamat' => 'Surabaya', 'created_at' => now(), 'updated_at' => now()],
            ['supplier_kode' => 'SUP03', 'supplier_nama' => 'UD Maju Lancar', 'supplier_alamat' => 'Blitar', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
