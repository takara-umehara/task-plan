<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'その１',
            'body' => '一つ目',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deadline_dateTime' => '20251231235959',
            'completed_dateTime' => null,
            'category_id' => '1',
            'importance' => '3',
            'user_id' => '1',
        ]);

        DB::table('posts')->insert([
            'title' => 'その2',
            'body' => '二つ目',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deadline_dateTime' => '20251231235959',
            'completed_dateTime' => null,
            'category_id' => '2',
            'importance' => '5',
            'user_id' => '2',
        ]);
    }
}
