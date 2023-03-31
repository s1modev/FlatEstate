<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'name'=>'Carl Ormand',
                'username'=>'admin',
                'email'=>'admin@demo.com',
                'password'=>Hash::make('password'),
            ]
        ];

        Admin::insert($admins);
    }
}
