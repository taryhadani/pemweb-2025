<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; // ✅ WAJIB ADA INI

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::firstOrCreate([
            'name' => 'Default Product',
            'Price' => 1.00, // Pastikan field ini sesuai dengan migrasi kamu
        ]);
    }
}
