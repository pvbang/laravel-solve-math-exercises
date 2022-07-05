<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\Grade;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::create([
            'name_grade' => 'Lớp 2',
            'slug' => Str::slug('Lớp 2'),
        ]);

        Grade::create([
            'name_grade' => 'Lớp 3',
            'slug' => Str::slug('Lớp 3'),
        ]);

        Grade::create([
            'name_grade' => 'Lớp 4',
            'slug' => Str::slug('Lớp 4'),
        ]);

        Grade::create([
            'name_grade' => 'Lớp 5',
            'slug' => Str::slug('Lớp 5'),
        ]);

        Grade::create([
            'name_grade' => 'Lớp 6',
            'slug' => Str::slug('Lớp 6'),
        ]);

        Grade::create([
            'name_grade' => 'Lớp 7',
            'slug' => Str::slug('Lớp 7'),
        ]);

        Grade::create([
            'name_grade' => 'Lớp 8',
            'slug' => Str::slug('Lớp 8'),
        ]);

        Grade::create([
            'name_grade' => 'Lớp 9',
            'slug' => Str::slug('Lớp 9'),
        ]);

        Grade::create([
            'name_grade' => 'Lớp 10',
            'slug' => Str::slug('Lớp 10'),
        ]);

        Grade::create([
            'name_grade' => 'Lớp 11',
            'slug' => Str::slug('Lớp 11'),
        ]);

        Grade::create([
            'name_grade' => 'Lớp 12',
            'slug' => Str::slug('Lớp 12'),
        ]);
    }
}
