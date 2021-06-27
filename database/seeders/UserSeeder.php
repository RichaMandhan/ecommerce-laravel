<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //import database
use Illuminate\Support\Facades\Hash; // For password
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
            'name' => 'Peeter Parker',
            'email' => 'peeterparker@gmail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
