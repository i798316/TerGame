<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name' => 'TestUser',
            'email' => 'a@a.com',
            'password' => Hash::make('123456789'),
        ]);
        DB::table('games')->insert([[
            'name' => 'Spider Man 2',
            'category' => 'Accion',
            'description' => 'Its Spider Man',
            'price' => 50,
            'discount' => 0,
            'developer' => '1',
            'created_at' => Carbon::now(),
        ],[
            'name' => 'Baldurs Gate',
            'category' => 'RPG',
            'description' => 'Full RPG',
            'price' => 60,
            'discount' => 10,
            'developer' => '1',
            'created_at' => Carbon::now(),
        ],[
            'name' => 'God of War',
            'category' => 'Action',
            'description' => 'Its Daddy Kratos',
            'price' => 40,
            'discount' => 0,
            'developer' => '1',
            'created_at' => Carbon::now(),
        ],[
            'name' => 'Crash Bandicoot',
            'category' => 'Platform',
            'description' => 'Its a Crazy',
            'price' => 20,
            'discount' => 20,
            'developer' => '1',
            'created_at' => Carbon::now(),
        ],[
            'name' => 'Crash Bandicoot2',
            'category' => 'Platform',
            'description' => 'Its a Crazy',
            'price' => 20,
            'discount' => 0,
            'developer' => '1',
            'created_at' => Carbon::now(),
        ]]);
    }
}
