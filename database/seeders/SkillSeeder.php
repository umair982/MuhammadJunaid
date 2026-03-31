<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            ['name' => 'Video Editing', 'level' => 95],
            ['name' => 'Color Grading', 'level' => 90],
            ['name' => 'Motion Graphics', 'level' => 85],
            ['name' => 'YouTube Content Editing', 'level' => 92],
            ['name' => 'Adobe Premiere Pro', 'level' => 93],
            ['name' => 'After Effects', 'level' => 88],
        ];

        foreach ($skills as $skill) {
            Skill::updateOrCreate(
                ['name' => $skill['name']],
                ['level' => $skill['level']]
            );
        }
    }
}
