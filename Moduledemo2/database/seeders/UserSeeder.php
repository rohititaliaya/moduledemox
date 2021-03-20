<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB; 
use Illuminate\Support\Str;
use Hash;

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
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'phone_no'=>Str::random(10),
            'password' => HASH::make('password'),
        ]);
    }
}
