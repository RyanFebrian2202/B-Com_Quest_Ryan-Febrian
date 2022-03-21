<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PastrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pastries')->insert([
            'name' => 'Cake',
            'picture' => 'cake.jpg',
            'quantity' => 50,
            'price' => 50000,
        ]);

        DB::table('pastries')->insert([
            'name' => 'Macaroon',
            'picture' => 'macaroon.jpg',
            'quantity' => 100,
            'price' => 25000,
        ]);

        DB::table('pastries')->insert([
            'name' => 'Cookie',
            'picture' => 'cookie.jpg',
            'quantity' => 300,
            'price' => 20000,
        ]);
    }
}
