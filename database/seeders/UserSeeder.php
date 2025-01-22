<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => '梅原貴空', //[,]を忘れるとエラーが出ることも
            'email' => 'a@a',
            'password' => Hash::make('password'),
            'created_at' => '20200101101010',
            'updated_at' => new DateTime(),
        ]);

        DB::table('users')->insert([
            'name' => 'ああああ', //[,]を忘れるとエラーが出ることも
            'email' => 'b@b',
            'password' => Hash::make('password'),
            'created_at' => '20200101101010',
            'updated_at' => new DateTime(),
        ]);
    }
}
