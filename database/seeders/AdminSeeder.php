<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

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
                'username'=>'simodev',
                'email'=>'simodev@gmail.com',
                'password'=>'$2y$10$pZq5vK5/OqBJRM0DsI6F6.NNWjbt.9gamxot2Jc9v73qJOiLT6eme',
            ]
        ];

        Admin::insert($admins);
    }
}
