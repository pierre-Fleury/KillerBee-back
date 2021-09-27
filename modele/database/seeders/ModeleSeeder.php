<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModeleTableSeeder extends Seeder
{
    public function run()
    {

        DB::table('modele')->insert([
            [
                'Nom' => 'My First Post', 
                'Description' => 'lorem ipsum dolor sit ammet',
                'pUHT' => 1,
                'Gamme' => 'lorem ipsum dolor sit ammet'
            ], [
                'Nom' => 'My second Post', 
                'Description' => 'lorem ipsum dolor sit ammet',
                'pUHT' => 2,
                'Gamme' => 'test'
            ], [
                'Nom' => 'My third Post', 
                'Description' => 'lorem ipsum dolor sit ammet',
                'pUHT' => 3,
                'Gamme' => 'bla'
            ]
        ]);
    }

}