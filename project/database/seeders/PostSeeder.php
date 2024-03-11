<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Заголовок статьи 1',
            'desc' => 'Короткое описание статьи 1',
            'text' => 'Текст статьи 1',
            'date' => now(),
        ]);

        DB::table('posts')->insert([
            'title' => 'Заголовок статьи 2',
            'desc' => 'Короткое описание статьи 2',
            'text' => 'Текст статьи 2',
            'date' => now(),
        ]);

        DB::table('posts')->insert([
            'title' => 'Заголовок статьи 3',
            'desc' => 'Короткое описание статьи 3',
            'text' => 'Текст статьи 3',
            'date' => now(),
        ]);

        DB::table('posts')->insert([
            'title' => 'Заголовок статьи 4',
            'desc' => 'Короткое описание статьи 4',
            'text' => 'Текст статьи 4',
            'date' => now(),
        ]);

        DB::table('posts')->insert([
            'title' => 'Заголовок статьи 5',
            'desc' => 'Короткое описание статьи 5',
            'text' => 'Текст статьи 5',
            'date' => now(),
        ]);
    }
}
