<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'name' => 'Sergio Ramos',
                'email' => 'sergio.ramos@goace.vc',
                'cpf' => '12345678910',
                'phone' => '+55066999611661',
                'birth_date' => '1996-03-22',
                'password' => Hash::make("@Mudar12345")
            ],
            [
                'name' => 'Benevid',
                'email' => 'benevid@unemat.br',
                'cpf' => '12345678911',
                'phone' => '+55066999611661',
                'birth_date' => '1996-03-22',
                'password' => Hash::make("@Mudar12345")
            ]
        ]);
    }
}
