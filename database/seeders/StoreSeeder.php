<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            'name' => 'Store A',
            'city' => 'Miami',
            'state' => 'FL'
        ]);
        DB::table('stores')->insert([
            'name' => 'Store B',
            'city' => 'Doral',
            'state' => 'FL'
        ]);
        DB::table('stores')->insert([
            'name' => 'Store C',
            'city' => 'Atlanta',
            'state' => 'GA'
        ]);
        DB::table('stores')->insert([
            'name' => 'Store E',
            'city' => 'Savannah',
            'state' => 'GA'
        ]);
        DB::table('stores')->insert([
            'name' => 'Store F',
            'city' => 'Jacksonville',
            'state' => 'FL'
        ]);
    }
}
