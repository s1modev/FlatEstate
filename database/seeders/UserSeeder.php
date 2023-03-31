<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'=>5,
                'full_name'=>'Evan Reed',
                'username'=>'user',
                'email'=>'user@demo.com',
                'phone_number'=>'+12025550141',
                'password'=> Hash::make('password'),
                'credits'=>27,
                'avatar'=>'evan.png',
            ],
        ];

        User::insert($users);
    }
}
