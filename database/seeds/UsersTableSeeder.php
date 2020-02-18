<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$tohVzyKpsZ4d8uBE5o1oA.4J7nBOFNmivohTVXeAntfYYzVOSU87W',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
