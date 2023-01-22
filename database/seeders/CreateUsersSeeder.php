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
               'email'=>'admin@mail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Operator',
               'email'=>'operator@mail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('12345678'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
