<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        $data = DB::table('m_kategori')
            ->whereNotNull('kategori_kode')
            ->orderBy('id')
            ->get();

        return view('kategori', ['data' => $data]);
    }
}
