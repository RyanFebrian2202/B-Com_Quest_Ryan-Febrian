<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin123@gmail.com',
            'date_of_birth' => '2003-02-22',
            'telephone' => '082246584822',
            'password' => Hash::make('Admin#123'),
            'role' => 'Admin'
        ]);

        DB::table('users')->insert([
            'username' => 'Ryfe22',
            'email' => 'ryan.febrian@binus.ac.id',
            'date_of_birth' => '2003-02-22',
            'gender' => 'Male',
            'telephone' => '082246584822',
            'password' => Hash::make('Spiderman2202'),
            'role' => 'Member'
        ]);
    }
}
