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
                'password'       => '$2y$10$bvYhN6JwpRJ/3e8mwEzpiu9YUxDi0QfbJM3GjQAa9fiz0QE5SACB6',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
