<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Classic Shirt',
                'image' => '',
                'brand' => 'Nike',
                'price' => 79.90,
                'countInStock' => 100,
                'description' => "Nike Classic Shirt is a beautiful item for a reserved men",
                "category_id" => 1
            ],
            [
                'name' => 'Cotton Fit Shirt',
                'image' => '',
                'brand' => 'Lacoste',
                'price' => 60.00,
                'countInStock' => 70,
                'description' => "Cotton Fit Shirt is a beautiful item for a polite men",
                "category_id" => 1
            ],
            [
                'name' => 'Slim Shirt',
                'image' => '',
                'brand' => 'Lacoste',
                'price' => 90.00,
                'countInStock' => 60,
                'description' => "Slim Shirt is a beautiful item for a simple men",
                'category_id' => 1
            ]
        ]);
    }
}
