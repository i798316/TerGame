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
        DB::table('users')->insert([[
            'name' => 'DevUser',
            'email' => 'developer@tergame.com',
            'password' => Hash::make('123456789'),
        ],[
            'name' => 'Juan',
            'email' => 'juan@gmail.com',
            'password' => Hash::make('123456789'),
        ]]);

        DB::table('games')->insert([[
            'name' => 'Spider Man 2',
            'category' => 'Action',
            'description' => 'Its Spider Man',
            'price' => 50,
            'discount' => 0,
            'developer' => '1',
            'image' => 'https://www.mundodeportivo.com/alfabeta/hero/2023/10/spidey.jpg?width=768&aspect_ratio=16:9&format=nowebp',
            'created_at' => Carbon::now(),
        ],[
            'name' => 'Baldurs Gate 3',
            'category' => 'RPG',
            'description' => 'Full RPG',
            'price' => 60,
            'discount' => 10,
            'developer' => '1',
            'image' => 'https://cdn.cloudflare.steamstatic.com/steam/apps/1086940/header.jpg?t=1703250718',
            'created_at' => Carbon::now(),
        ],[
            'name' => 'God of War Ragnarok',
            'category' => 'Action',
            'description' => 'Its Daddy Kratos',
            'price' => 40,
            'discount' => 0,
            'developer' => '1',
            'image' => 'https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2021/09/god-war-ragnarok-2466115.jpg?tf=3840x',
            'created_at' => Carbon::now(),
        ],[
            'name' => 'Crash Bandicoot',
            'category' => 'Platform',
            'description' => 'Its a Crazy',
            'price' => 20,
            'discount' => 20,
            'developer' => '1',
            'image' => 'https://i.ytimg.com/vi/LhNAsc5Cq7w/maxresdefault.jpg',
            'created_at' => Carbon::now(),
        ],[
            'name' => 'Crash Bandicoot2',
            'category' => 'Platform',
            'description' => 'Its a Crazy',
            'price' => 20,
            'discount' => 0,
            'developer' => '1',
            'image' => 'https://i.ytimg.com/vi/ClO8qnqfHiY/maxresdefault.jpg',
            'created_at' => Carbon::now(),
        ]]);
    }
}


