<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
                // Create a single user
                $admin1 = DB::table('users')->insert([
                    'name' => 'DJIGUI KEITA',
                    'email' => 'djigui92@gmail.com',
                    'password' => Hash::make('password###@###@#@'),
                ]);


                $admin2 = DB::table('users')->insert([
                    'name' => 'FATOGOMA DAOU',
                    'email' => 'fatogoma.daou97@gmail.com',
                    'password' => Hash::make('password###@###@#@'),
                ]);

                $admin3 = DB::table('users')->insert([
                    'name' => 'Djehouty KONE',
                    'email' => 'self@djehouty.com',
                    'password' => Hash::make('password###@###@#@'),
                ]);


                $admin4 = DB::table('users')->insert([
                    'name' => 'YOUSSOUF SALL',
                    'email' => 'sall@pro.com',
                    'password' => Hash::make('password###@###@#@'),
                ]);
    }
}
