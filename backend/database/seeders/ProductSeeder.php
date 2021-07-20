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
                'name' => 'New Shirt Red',
                'image' => 'red-grid-shirt.jpg',
                'brand' => 'Nike',
                'price' => 88.00,
                'countInStock' => 100,
                'description' => "Nike Classic Shirt is a beautiful item for a reserved men",
                "category_id" => 1
            ],
            [
                'name' => 'Fitness Shirt',
                'image' => 'red-grid-shirt.jpg',
                'brand' => 'Nike',
                'price' => 60.00,
                'countInStock' => 70,
                'description' => "Cotton Fit Shirt is a beautiful item for a polite men",
                "category_id" => 1
            ],
            [
                'name' => 'Javascript Shirt',
                'image' => 'blue-shirt.jpg',
                'brand' => 'Nike',
                'price' => 80.00,
                'countInStock' => 60,
                'description' => "Slim Shirt is a beautiful item for a simple men",
                'category_id' => 1
            ],
            [
                'name' => 'Hellou Shirt',
                'image' => 'new-grid-shirt.jpg',
                'brand' => 'Lacoste',
                'price' => 200.00,
                'countInStock' => 40,
                'description' => "Slim Shirt is a beautiful item for a simple men",
                'category_id' => 1
            ],
            [
                'name' => 'Hello World Pant',
                'image' => 'black-pant.jpg',
                'brand' => 'Armani',
                'price' => 90.00,
                'countInStock' => 80,
                'description' => "Slim Shirt is a beautiful item for a simple men",
                'category_id' => 2
            ],
            [
                'name' => 'Strong Pant - Men',
                'image' => 'strong-pant.jpg',
                'brand' => 'Addidas',
                'price' => 120.00,
                'countInStock' => 80,
                'description' => "Strong Pant - Men is a beautiful item for a simple men",
                'category_id' => 2
            ],
            [
                'name' => 'Red Shirt - Men',
                'image' => 'red-grid-shirt.jpg',
                'brand' => 'Armani',
                'price' => 150.00,
                'countInStock' => 100,
                'description' => "Red Shirt - Men is a beautiful item for a reserved men",
                "category_id" => 1
            ],
            [
                'name' => 'Blue Shirt',
                'image' => 'blue-shirt.jpg',
                'brand' => 'Nike',
                'price' => 60.00,
                'countInStock' => 70,
                'description' => "Blue Shirt is a beautiful item for a polite men",
                "category_id" => 1
            ],
            [
                'name' => 'White Pant',
                'image' => 'white-pant.jpg',
                'brand' => 'Lacoste',
                'price' => 80.00,
                'countInStock' => 60,
                'description' => "White Pant is a beautiful item for a simple men",
                'category_id' => 2
            ],
            [
                'name' => 'Black Pant',
                'image' => 'black-pant.jpg',
                'brand' => 'Nike',
                'price' => 90.00,
                'countInStock' => 40,
                'description' => "Black Pant is a beautiful item for a simple men",
                'category_id' => 2
            ],
            [
                'name' => 'Red Shirt - Grid',
                'image' => 'red-grid-shirt.jpg',
                'brand' => 'Nike',
                'price' => 100.00,
                'countInStock' => 80,
                'description' => "Red Shirt - Grid is a beautiful item for a simple men",
                'category_id' => 1
            ],
            [
                'name' => 'White Shirt - Grid',
                'image' => 'new-grid-shirt.jpg',
                'brand' => 'Lacoste',
                'price' => 75.00,
                'countInStock' => 50,
                'description' => "White Shirt - Grid is a beautiful item for a simple men",
                'category_id' => 1
            ]
        ]);
    }
}
