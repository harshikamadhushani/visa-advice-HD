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
            'password' => bcrypt('12345678'),
            'role_id'=>1,
       ]);

       $admin->assignRole('admin');
    }
}
