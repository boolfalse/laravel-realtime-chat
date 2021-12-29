<?php

use App\User;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => "User 1",
            'email' => 'user1@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        User::create([
            'name' => "User 2",
            'email' => 'user2@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
