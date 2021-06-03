<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@jobfindermw.com',
               'is_admin'=>'1',
               'password'=> bcrypt('admin!!@jb2021#1#n3x+63n!!'),
            ],
            [
               'name'=>'User',
               'email'=>'user@jobfindermw.com',
               'is_admin'=>'0',
               'password'=> bcrypt('user!!@jb2021#1#n3x+63n!!'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
