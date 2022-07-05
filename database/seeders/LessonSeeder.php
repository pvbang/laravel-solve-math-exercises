<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\Lesson;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Lesson::create([
            'id_chapter' => '1',
            'name_lesson' => 'Giải bài 1,2,3 trang 3 SGK Toán 2',
            'content' => 'Giải bài 1,2,3 trang 3 SGK Toán 2...',
            'page' => '3',
            'slug' => Str::slug('Giải bài 1,2,3 trang 3 SGK Toán 2'),
        ]);

        Lesson::create([
            'id_chapter' => '1',
            'name_lesson' => 'Giải bài 1,2,3,4,5 trang 4 SGK Toán 2',
            'content' => 'Giải bài 1,2,3,4,5 trang 4 SGK Toán 2...',
            'page' => '4',
            'slug' => Str::slug('Giải bài 1,2,3,4,5 trang 4 SGK Toán 2'),
        ]);
    }
}