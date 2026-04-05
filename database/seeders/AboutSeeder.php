<?php

namespace Database\Seeders;

use App\Models\AboutSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutSection::create([
            'subtitle' => 'About Me',
            'title' => 'I Build <span>Modern Web Solutions</span> with Passion',
            'description' => 'I am a passionate web developer focused on building clean, scalable, and high-performance applications. My goal is to create solutions that not only work but also deliver real value to users and businesses.'
        ]);
    }
}
