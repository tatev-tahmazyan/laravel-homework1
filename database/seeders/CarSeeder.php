<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('cars')->insert([
            [
                'brand' => 'Tesla',
                'model' => 'Model X',
                'date' => '2023-10-19',
                'range' => rand(100,5000),
                'color' => 'black',
                'price' => rand(200,50000)

            ],
            [
                'brand' => 'Porsche',
                'model' => '718 Boxster',
                'date' => '2022-09-12',
                'range' => rand(100,5000),
                'color' => 'grey',
                'price' => rand(200,50000)

            ]
        ]);
    }
}