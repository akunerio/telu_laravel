<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('variants')->insert([
            'product_id' => 1,
            'name' => "Varian A",
            'description' => "Deskripsi A",
            'processor' => "A",
            'memory' => "A",
            'storage' => "A",
        ]);

        DB::table('variants')->insert([
            'product_id' => 1,
            'name' => "Varian B",
            'description' => "Deskripsi B",
            'processor' => "B",
            'memory' => "B",
            'storage' => "B",
        ]);
    }
}
