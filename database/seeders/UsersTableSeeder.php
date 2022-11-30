<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username' => 'admin',
                'password' => bcrypt('dmin'),
                'level_user' => 'Admin',
            ],
            [
                'username' => 'guru',
                'password' => bcrypt('guru'),
                'level_user' => 'Guru',
            ],
        ];
        \DB::table('users')->insert($users);
    }
}
