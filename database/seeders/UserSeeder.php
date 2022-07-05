<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name_user' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123123123'),
        ]);

        User::create([
            'name_user' => 'Phan Văn Bằng',
            'email' => 'pvbang23092002@gmail.com',
            'password' => Hash::make('123123123'),
        ]);

        User::create([
            'name_user' => 'Trần Nguyễn Vĩnh Uy',
            'email' => 'uy@gmail.com',
            'password' => Hash::make('123123123'),
        ]);
    }
}
