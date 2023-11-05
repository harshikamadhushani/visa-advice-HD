<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin=User::create([
            "name"=> "admin",
            'email'=>"admin@gmail.com",
            'username'=>"admin",
            'email_verified_at' => now(),
            'password' => '$2y$12$y5UZn/3I9Lov5gksDsopQuhNqVzBKtpeKWrm.CW3Yz8jTslGCExr6',
       ]);

       $admin->assignRole('admin');
    }
}
