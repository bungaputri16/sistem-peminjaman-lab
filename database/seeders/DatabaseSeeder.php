<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::create(
        [
        'name' => 'bunga',
        'email'=>'bunga@gmail.com',
        'password'=> bcrypt('12345'),
        ],

        [
            'name' => 'putri',
            'email'=>'putri@gmail.com',
            'password'=> bcrypt('putri'),
           ]
    
    );
    }
}
