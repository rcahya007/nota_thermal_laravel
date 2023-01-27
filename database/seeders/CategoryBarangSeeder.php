<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_barang')->insert([
            'id_category' => 1,
            'category' => 'Sparepart Laptop'
        ]);
        DB::table('category_barang')->insert([
            'id_category' => 2,
            'category' => 'Separepart Computer'
        ]);
        DB::table('category_barang')->insert([
            'id_category' => 3,
            'category' => 'Laptop Second'
        ]);
        DB::table('category_barang')->insert([
            'id_category' => 4,
            'category' => 'Baju Thrift - Preloved'
        ]);
        DB::table('category_barang')->insert([
            'id_category' => 5,
            'category' => 'Aksesoris Komputer Laptop'
        ]);
        DB::table('category_barang')->insert([
            'id_category' => 6,
            'category' => 'Paket Rakit Komputer'
        ]);
        DB::table('category_barang')->insert([
            'id_category' => 7,
            'category' => 'Pelatihan Training'
        ]);
        DB::table('category_barang')->insert([
            'id_category' => 8,
            'category' => 'Gaming'
        ]);
        DB::table('category_barang')->insert([
            'id_category' => 9,
            'category' => 'Printer Cetakan Training'
        ]);
        DB::table('category_barang')->insert([
            'id_category' => 10,
            'category' => 'Jaringan'
        ]);
    }
}
