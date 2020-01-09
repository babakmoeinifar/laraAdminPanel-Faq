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
                'password'       => '$2y$10$DrZXMUnogoh7mSaVLnsLaeYDrfXf74Y2cG4f/SNHM/GariRW3SKXC',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
