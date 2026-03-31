<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::updateOrCreate(
            ['id' => 1],
            [
                'name' => 'Muhammad Junaid',
                'title' => 'Professional Video Editor',
                'description' => 'Muhammad Junaid is a passionate and creative video editor with a strong eye for detail and storytelling. He specializes in crafting engaging visual content, transforming raw footage into polished videos that captivate audiences. With experience in editing for social media, YouTube, and promotional content, he focuses on delivering high-quality work that aligns with client goals and modern trends.',
                'profile_image' => 'assets/images/banner/banner-user-image-two.png',
                'banner_image' => null,
                'link' => null,
            ]
        );
    }
}
