<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'),
            ]
        );

        $initialContent = [
            'hero_title' => 'Christopher',
            'hero_subtitle' => 'UI/UX Designer',
            'about_text' => 'I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it.',
            'contact_email' => 'example@mail.com',
        ];

        foreach ($initialContent as $key => $value) {
            \App\Models\PageContent::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }
    }
}
