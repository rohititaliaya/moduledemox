<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB; 
use Illuminate\Support\Str;
use Hash;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendors')->insert([
            'company_name' => Str::random(10),
            'vendor_address' => Str::random(10),
            'taxno' => Str::random(10),
            'password' => HASH::make('password'),
        ]);
    }
}
