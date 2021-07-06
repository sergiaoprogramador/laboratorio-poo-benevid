<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'name' => 'Marco Reus',
                'rating' => 5,
                'comment' => 'I love IT',
                'product_id' => 1
            ],
            [
                'name' => 'Michael Jackson',
                'rating' => 5,
                'comment' => 'Rusbéeeh',
                'product_id' => 2
            ],
            [
                'name' => 'Jack Jonhson',
                'rating' => 3,
                'comment' => 'I got you, i got everything',
                'product_id' => 1
            ],
            [
                'name' => 'Jack Jonhson',
                'rating' => 2,
                'comment' => 'Nice Shirt. Id love it',
                'product_id' => 3
            ],
            [
                'name' => 'Zezé de Camargo',
                'rating' => 1,
                'comment' => 'I think its horrible',
                'product_id' => 1
            ],
            [
                'name' => 'Gustavo Lima',
                'rating' => 4,
                'comment' => 'Gatinha assanhada se tá querendo o que?',
                'product_id' => 2
            ],
        ]);
    }
}
