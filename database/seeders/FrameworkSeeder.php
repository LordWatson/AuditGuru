<?php

namespace Database\Seeders;

use App\Models\Framework;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FrameworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Framework::insert([
            [
                'name' => 'Cyber Essentials',
                'slug' => 'cyber-essentials',
                'description' => 'A UK government-backed scheme focusing on essential cybersecurity controls.',
            ],
            [
                'name' => 'ISO 27001',
                'slug' => 'iso-27001',
                'description' => 'An international standard for information security management systems.',
            ],
        ]);
    }
}
