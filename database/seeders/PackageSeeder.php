<?php

namespace Database\Seeders;

use App\Models\Package;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages = [
            [
                'id' => 1,
                'name' => 'Basic',
                'price' => 5,
                'credits' => 1,
                'title' => 'Single Post',
                'Description' => 'save $0',
                'status' => 'published',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => 'Plus',
                'price' => 250,
                'credits' => 3,
                'title' => '3 Posts',
                'Description' => 'save $50',
                'status' => 'published',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'name' => 'Premium',
                'price' => 400,
                'credits' => 5,
                'title' => '5 Posts',
                'Description' => 'save $100',
                'status' => 'published',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ];

        Package::insert($packages);
    }
}
