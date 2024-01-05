<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'owner_id' => '1',
        ],[
            'name' => 'Baldurs Gate',
            'category' => 'RPG',
            'description' => 'Full RPG',
            'price' => 60,
            'owner_id' => '1',
        ],[
            'name' => 'God of War',
            'category' => 'Action',
            'description' => 'Its Daddy Kratos',
            'price' => 40,
            'owner_id' => '1',
        ],[
            'name' => 'Chrash Bandicoot',
            'category' => 'Platform',
            'description' => 'Its a Crazy',
            'price' => 20,
            'owner_id' => '1',
        ]]);
    }
}
