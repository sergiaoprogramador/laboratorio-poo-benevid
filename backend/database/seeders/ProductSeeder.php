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
                'name' => 'Slim Shirt',
                'image' => 'd1.jpg',
                'brand' => 'Nike',
                'price' => 60.00,
                'countInStock' => 100,
                'description' => "Nike Classic Shirt is a beautiful item for a reserved men",
                "category_id" => 1
            ],
            [
                'name' => 'Fit Shirt',
                'image' => 'd1.jpg',
                'brand' => 'Nike',
                'price' => 50.00,
                'countInStock' => 70,
                'description' => "Cotton Fit Shirt is a beautiful item for a polite men",
                "category_id" => 1
            ],
            [
                'name' => 'Best Pants',
                'image' => 'd1.jpg',
                'brand' => 'Nike',
                'price' => 70.00,
                'countInStock' => 60,
                'description' => "Slim Shirt is a beautiful item for a simple men",
                'category_id' => 1
            ],
            [
                'name' => 'Black Pants',
                'image' => 'd1.jpg',
                'brand' => 'Nike',
                'price' => 90.00,
                'countInStock' => 40,
                'description' => "Slim Shirt is a beautiful item for a simple men",
                'category_id' => 1
            ],
            [
                'name' => 'Blue Pants',
                'image' => 'd1.jpg',
                'brand' => 'Nike',
                'price' => 100.00,
                'countInStock' => 80,
                'description' => "Slim Shirt is a beautiful item for a simple men",
                'category_id' => 1
            ],
            [
                'name' => 'Red Pants',
                'image' => 'd1.jpg',
                'brand' => 'Nike',
                'price' => 55.00,
                'countInStock' => 80,
                'description' => "Slim Shirt is a beautiful item for a simple men",
                'category_id' => 1
            ]
        ]);
    }
}
