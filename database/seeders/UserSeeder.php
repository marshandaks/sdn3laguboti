<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds
     */
    public function run(): void
    {
        $user = [
            'name' => 'marshanda',
            'email' =>  'sdn173551@gmail.com',
            'password' => bcrypt('sdn173551'),
        ];

        User::insert($user);
    }
}
