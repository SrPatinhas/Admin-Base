<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => '$2y$10$U46wo.NlbAfilc889tmlfuZyyNNOPJAmg9WJ.NOT6jbqzZNmMnFyK',
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2020-02-17 18:13:15',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
