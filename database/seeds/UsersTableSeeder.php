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
                'password'           => '$2y$10$eBcHDeoIHI2f4hD08Tbile6TU0wVBA29jKTe/4klQZhIfFTkEzZtC',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2020-02-18 12:06:28',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
