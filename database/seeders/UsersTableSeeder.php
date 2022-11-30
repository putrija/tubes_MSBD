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
                'id' => '1',
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'level_user' => 'Admin',
            ],
            [
                'id' => '2',
                'username' => 'deyadeirma@gmail.com',
                'password' => bcrypt('guru'),
                'level_user' => 'Guru',
            ],
        ];
        \DB::table('users')->insert($users);
    }
}
