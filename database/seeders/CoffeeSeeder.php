<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coffees')->insert([
            'name' => 'Cappucino',
            'picture' => 'cappucino.jpg',
            'quantity' => 200,
            'price' => 18000,
        ]);

        DB::table('coffees')->insert([
            'name' => 'Espresso',
            'picture' => 'espresso.jpg',
            'quantity' => 100,
            'price' => 12000,
        ]);

        DB::table('coffees')->insert([
            'name' => 'Latte',
            'picture' => 'latte.jpg',
            'quantity' => 75,
            'price' => 18000,
        ]);
    }
}
