<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'admin',
            ],

            [
                'name' => 'orangtua',
                'email' => 'orangtua@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'orangtua',
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
    }
}
}
