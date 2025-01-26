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

        DB::table('posts')->insert([
            'title' => 'その3',
            'body' => '三つ目',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deadline_dateTime' => '20251231235959',
            'completed_dateTime' => null,
            'category_id' => '1',
            'importance' => '5',
            'user_id' => '1',
        ]);

        DB::table('posts')->insert([
            'title' => 'その4',
            'body' => '四つ目',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deadline_dateTime' => '20251231235959',
            'completed_dateTime' => null,
            'category_id' => '2',
            'importance' => '5',
            'user_id' => '2',
        ]);

        DB::table('posts')->insert([
            'title' => 'その5',
            'body' => '五つ目',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deadline_dateTime' => '20251231235959',
            'completed_dateTime' => null,
            'category_id' => '2',
            'importance' => '5',
            'user_id' => '2',
        ]);

        DB::table('posts')->insert([
            'title' => 'その6',
            'body' => '六つ目',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deadline_dateTime' => '20251231235959',
            'completed_dateTime' => null,
            'category_id' => '2',
            'importance' => '5',
            'user_id' => '2',
        ]);

        DB::table('posts')->insert([
            'title' => 'その7',
            'body' => '七つ目',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deadline_dateTime' => '20251231235959',
            'completed_dateTime' => null,
            'category_id' => '2',
            'importance' => '5',
            'user_id' => '2',
        ]);

        DB::table('posts')->insert([
            'title' => 'その8',
            'body' => '八つ目',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'deadline_dateTime' => '20251231235959',
            'completed_dateTime' => null,
            'category_id' => '2',
            'importance' => '5',
            'user_id' => '2',
        ]);

        DB::table('posts')->insert([
            'title' => 'その9',
            'body' => '九つ目',
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
