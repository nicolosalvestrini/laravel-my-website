<?php

namespace Database\Seeders;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            ['name' => 'HTML', 'icon' => 'html5', 'type' => 'frontend', 'show_in_skills' => true, 'sort_order' => 1],
            ['name' => 'CSS', 'icon' => 'css3', 'type' => 'frontend', 'show_in_skills' => true, 'sort_order' => 2],
            ['name' => 'JavaScript', 'icon' => 'javascript', 'type' => 'frontend', 'show_in_skills' => true, 'sort_order' => 3],
            ['name' => 'React', 'icon' => 'react', 'type' => 'frontend', 'show_in_skills' => true, 'sort_order' => 4],
            ['name' => 'Bootstrap', 'icon' => 'bootstrap', 'type' => 'frontend', 'show_in_skills' => true, 'sort_order' => 5],
            ['name' => 'PHP', 'icon' => 'php', 'type' => 'backend', 'show_in_skills' => true, 'sort_order' => 6],
            ['name' => 'Laravel', 'icon' => 'laravel', 'type' => 'backend', 'show_in_skills' => true, 'sort_order' => 7],
            ['name' => 'Node.js', 'icon' => 'nodejs', 'type' => 'backend', 'show_in_skills' => true, 'sort_order' => 8],
            ['name' => 'Express', 'icon' => 'express', 'type' => 'backend', 'show_in_skills' => true, 'sort_order' => 9],
            ['name' => 'MySQL', 'icon' => 'mysql', 'type' => 'database', 'show_in_skills' => true, 'sort_order' => 10],
            ['name' => 'Git', 'icon' => 'git', 'type' => 'devops', 'show_in_skills' => true, 'sort_order' => 11],
            ['name' => 'GitHub', 'icon' => 'github', 'type' => 'devops', 'show_in_skills' => true, 'sort_order' => 12],
        ];

        foreach ($technologies as $technology){
            Technology::updateOrCreate(
                ['name' => $technology['name']],
                $technology
            );
        }
    }
}
