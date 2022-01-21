<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => 'admin',
            'prenom' => 'admin principale',
            'role' => 1,
            'email' => 'admin@gmail.com',
            'contact' => '0789123532',
            'status' => 1,
            'password' => Hash::make('0789123532'),
        ]);
    }
}
