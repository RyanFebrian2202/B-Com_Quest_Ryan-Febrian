<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teas')->insert([
            'name' => 'Green Tea',
            'picture' => 'green-tea.jpg',
            'quantity' => 100,
            'price' => 10000,
        ]);

        DB::table('teas')->insert([
            'name' => 'Oolong Tea',
            'picture' => 'oolong-tea.jpg',
            'quantity' => 50,
            'price' => 20000,
        ]);

        DB::table('teas')->insert([
            'name' => 'Jasmine Tea',
            'picture' => 'jasmine-tea.jpg',
            'quantity' => 75,
            'price' => 15000,
        ]);
    }
}
