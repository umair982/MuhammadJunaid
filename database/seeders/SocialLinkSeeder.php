<?php

namespace Database\Seeders;

use App\Models\SocialLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = [
            [
                'platform' => 'Instagram',
                'icon' => 'fa-brands fa-instagram',
                'url' => 'https://instagram.com/'
            ],
            [
                'platform' => 'LinkedIn',
                'icon' => 'fa-brands fa-linkedin-in',
                'url' => 'https://linkedin.com/'
            ],
            [
                'platform' => 'Twitter',
                'icon' => 'fa-brands fa-twitter',
                'url' => 'https://twitter.com/'
            ],
            [
                'platform' => 'Facebook',
                'icon' => 'fa-brands fa-facebook-f',
                'url' => 'https://facebook.com/'
            ],
        ];

        foreach ($links as $link) {
            SocialLink::updateOrCreate(
                ['platform' => $link['platform']],
                $link
            );
        }
    }
}
