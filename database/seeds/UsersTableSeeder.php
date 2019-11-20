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
                'subdomain'      => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Company 1',
                'email'          => 'company1@company1.com',
                'password'       => '$2y$10$bvYhN6JwpRJ/3e8mwEzpiu9YUxDi0QfbJM3GjQAa9fiz0QE5SACB6',
                'remember_token' => null,
                'subdomain'      => 'company1',
            ],
            [
                'id'             => 3,
                'name'           => 'Company 2',
                'email'          => 'company2@company2.com',
                'password'       => '$2y$10$bvYhN6JwpRJ/3e8mwEzpiu9YUxDi0QfbJM3GjQAa9fiz0QE5SACB6',
                'remember_token' => null,
                'subdomain'      => 'company2',
            ],
        ];

        User::insert($users);
    }
}
