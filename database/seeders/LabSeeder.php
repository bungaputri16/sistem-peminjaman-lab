<?php

namespace Database\Seeders;

use App\Models\Lab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lab::create([
            'nama' => 'iot',
        ]);
        Lab::create([
            'nama' => 'jarkom',
        ]);
        Lab::create([
            'nama' => 'animasi',
        ]);
    }
}
