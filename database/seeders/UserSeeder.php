<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
                'username'=>'Evanreed',
                'email'=>'Evan73@gmail.com',
                'phone_number'=>'+12025550141',
                'password'=>'$2y$10$pZq5vK5/OqBJRM0DsI6F6.NNWjbt.9gamxot2Jc9v73qJOiLT6eme',
                'credits'=>27,
                'avatar'=>'evan.png',
            ],
        ];

        User::insert($users);
    }
}
