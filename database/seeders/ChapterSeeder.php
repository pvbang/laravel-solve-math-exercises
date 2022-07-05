<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\Chapter;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chapter::create([
            'id_subject' => '1',
            'name_chapter' => 'Chương I. Ôn tập và bổ sung',
            'slug' => Str::slug('Chương I. Ôn tập và bổ sung'),
        ]);

        Chapter::create([
            'id_subject' => '1',
            'name_chapter' => 'Chương II. Phép cộng có nhớ trong phạm vi 100',
            'slug' => Str::slug('Chương II. Phép cộng có nhớ trong phạm vi 100'),
        ]);

        Chapter::create([
            'id_subject' => '1',
            'name_chapter' => 'Chương III. Phép trừ có nhớ trong phạm vi 100',
            'slug' => Str::slug('Chương III. Phép trừ có nhớ trong phạm vi 100'),
        ]);

    }
}