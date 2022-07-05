<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Subject::create([
            'name_subject' => 'Sách giáo khoa Toán',
            'id_grade' => '1',
            'slug' => Str::slug('Sách giáo khoa Toán'),
        ]);
        Subject::create([
            'name_subject' => 'Sách bài tập Toán',
            'id_grade' => '1',
            'slug' => Str::slug('Sách bài tập Toán'),
        ]);

        //
        Subject::create([
            'name_subject' => 'Sách giáo khoa Toán',
            'id_grade' => '2',
            'slug' => Str::slug('Sách giáo khoa Toán'),
        ]);
        Subject::create([
            'name_subject' => 'Sách bài tập Toán',
            'id_grade' => '2',
            'slug' => Str::slug('Sách bài tập Toán'),
        ]);

        //
        Subject::create([
            'name_subject' => 'Sách giáo khoa Toán',
            'id_grade' => '3',
            'slug' => Str::slug('Sách giáo khoa Toán'),
        ]);
        Subject::create([
            'name_subject' => 'Sách bài tập Toán',
            'id_grade' => '3',
            'slug' => Str::slug('Sách bài tập Toán'),
        ]);

        //
        Subject::create([
            'name_subject' => 'Sách giáo khoa Toán',
            'id_grade' => '4',
            'slug' => Str::slug('Sách giáo khoa Toán'),
        ]);
        Subject::create([
            'name_subject' => 'Sách bài tập Toán',
            'id_grade' => '4',
            'slug' => Str::slug('Sách bài tập Toán'),
        ]);

        //
        Subject::create([
            'name_subject' => 'Sách giáo khoa Toán (Đại số)',
            'id_grade' => '5',
            'slug' => Str::slug('Sách giáo khoa Toán (Đại số)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách bài tập Toán (Đại số)',
            'id_grade' => '5',
            'slug' => Str::slug('Sách bài tập Toán (Đại số)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách giáo khoa Toán (Hình học)',
            'id_grade' => '5',
            'slug' => Str::slug('Sách giáo khoa Toán (Hình học)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách bài tập Toán (Hình học)',
            'id_grade' => '5',
            'slug' => Str::slug('Sách bài tập Toán (Hình học)'),
        ]);

        //
        Subject::create([
            'name_subject' => 'Sách giáo khoa Toán (Đại số)',
            'id_grade' => '6',
            'slug' => Str::slug('Sách giáo khoa Toán (Đại số)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách bài tập Toán (Đại số)',
            'id_grade' => '6',
            'slug' => Str::slug('Sách bài tập Toán (Đại số)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách giáo khoa Toán (Hình học)',
            'id_grade' => '6',
            'slug' => Str::slug('Sách giáo khoa Toán (Hình học)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách bài tập Toán (Hình học)',
            'id_grade' => '6',
            'slug' => Str::slug('Sách bài tập Toán (Hình học)'),
        ]);

        //
        Subject::create([
            'name_subject' => 'Sách giáo khoa Toán (Đại số)',
            'id_grade' => '7',
            'slug' => Str::slug('Sách giáo khoa Toán (Đại số)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách bài tập Toán (Đại số)',
            'id_grade' => '7',
            'slug' => Str::slug('Sách bài tập Toán (Đại số)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách giáo khoa Toán (Hình học)',
            'id_grade' => '7',
            'slug' => Str::slug('Sách giáo khoa Toán (Hình học)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách bài tập Toán (Hình học)',
            'id_grade' => '7',
            'slug' => Str::slug('Sách bài tập Toán (Hình học)'),
        ]);

        //
        Subject::create([
            'name_subject' => 'Sách giáo khoa Toán (Đại số)',
            'id_grade' => '8',
            'slug' => Str::slug('Sách giáo khoa Toán (Đại số)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách bài tập Toán (Đại số)',
            'id_grade' => '8',
            'slug' => Str::slug('Sách bài tập Toán (Đại số)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách giáo khoa Toán (Hình học)',
            'id_grade' => '8',
            'slug' => Str::slug('Sách giáo khoa Toán (Hình học)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách bài tập Toán (Hình học)',
            'id_grade' => '8',
            'slug' => Str::slug('Sách bài tập Toán (Hình học)'),
        ]);

        //
        Subject::create([
            'name_subject' => 'Sách giáo khoa Toán (Đại số)',
            'id_grade' => '9',
            'slug' => Str::slug('Sách giáo khoa Toán (Đại số)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách bài tập Toán (Đại số)',
            'id_grade' => '9',
            'slug' => Str::slug('Sách bài tập Toán (Đại số)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách giáo khoa Toán (Hình học)',
            'id_grade' => '9',
            'slug' => Str::slug('Sách giáo khoa Toán (Hình học)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách bài tập Toán (Hình học)',
            'id_grade' => '9',
            'slug' => Str::slug('Sách bài tập Toán (Hình học)'),
        ]);

        //
        Subject::create([
            'name_subject' => 'Sách giáo khoa Toán (Đại số)',
            'id_grade' => '10',
            'slug' => Str::slug('Sách giáo khoa Toán (Đại số)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách bài tập Toán (Đại số)',
            'id_grade' => '10',
            'slug' => Str::slug('Sách bài tập Toán (Đại số)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách giáo khoa Toán (Hình học)',
            'id_grade' => '10',
            'slug' => Str::slug('Sách giáo khoa Toán (Hình học)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách bài tập Toán (Hình học)',
            'id_grade' => '10',
            'slug' => Str::slug('Sách bài tập Toán (Hình học)'),
        ]);

        //
        Subject::create([
            'name_subject' => 'Sách giáo khoa Toán (Đại số)',
            'id_grade' => '11',
            'slug' => Str::slug('Sách giáo khoa Toán (Đại số)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách bài tập Toán (Đại số)',
            'id_grade' => '11',
            'slug' => Str::slug('Sách bài tập Toán (Đại số)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách giáo khoa Toán (Hình học)',
            'id_grade' => '11',
            'slug' => Str::slug('Sách giáo khoa Toán (Hình học)'),
        ]);
        Subject::create([
            'name_subject' => 'Sách bài tập Toán (Hình học)',
            'id_grade' => '11',
            'slug' => Str::slug('Sách bài tập Toán (Hình học)'),
        ]);

    }
}
