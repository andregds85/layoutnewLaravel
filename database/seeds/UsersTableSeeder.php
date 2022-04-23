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
                'email'          => 'andregds85@gmail.com',
                'password'       => '$2y$10$Gf6R6Ua.JUU9HTfZ6JsjEebpc9M/MSRyNUAAKqBYlfhWIhL4L17Sa',
                'remember_token' => null,
                'created_at'     => '2019-09-10 14:00:26',
                'updated_at'     => '2019-09-10 14:00:26',
            ],
        ];

        User::insert($users);

    }
}


