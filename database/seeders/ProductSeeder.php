<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $products = [
            [
                'name' => 'Segiempat saudia',
                'price' => 15000,
                'image' => 'saudia.png',
            ],
            [
                'name' => 'Paris Square',
                'price' => 19000,
                'image' => 'paris_premium.png',
            ],
            [
                'name' => 'Pashmina Crincle',
                'price' => 20000,
                'image' => 'pashmina_crincle.jpg',
            ],
            [
                'name' => 'Bella Square',
                'price' => 25000,
                'image' => 'bella_square.jpg',
            ],
            [
                'name' => 'Pashmina Ceruty',
                'price' => 25000,
                'image' => 'pashmina_ceruty.jpg',
            ],
            [
                'name' => 'Bergo Sport',
                'price' => 30000,
                'image' => 'bergo_sport.jpg',
            ],
            [
                'name' => 'Pashmina Kaos',
                'price' => 20000,
                'image' => 'pashmina_kaos.jpg',
            ],
            [
                'name' => 'Pashmina Plisket',
                'price' => 27000,
                'image' => 'pashmina_plisket.jpg',
            ],
        ];

        DB::table('product')->insert($products);
    }
}
