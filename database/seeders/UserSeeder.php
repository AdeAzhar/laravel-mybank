<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'role' => 'admin'
            ],
            [
                'name' => 'John Doe',
                'email' => 'johndoe@gmail.com',
                'password' => bcrypt('john1234'),
                'role' => 'nasabah'
            ],
            [
                'name' => 'Jokopi',
                'email' => 'jokopi@gmail.com',
                'password' => bcrypt('jokopi123'),
                'role' => 'nasabah'
            ],
            [
                'name' => 'Salmon Ijo',
                'email' => 'salmon@gmail.com',
                'password' => bcrypt('salmon123'),
                'role' => 'nasabah'
            ]];

        foreach ($userData as $key => $val)
        {
            User::create($val);
        }
    }
}
