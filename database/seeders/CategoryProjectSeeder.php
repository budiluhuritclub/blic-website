<?php

namespace Database\Seeders;

use App\Models\DataCenter\CategoryProject;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_projects = [
            [
                'name' => 'Web Development',
                'slug' => 'web-development',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mobile Development',
                'slug' => 'mobile-development',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Desktop Development',
                'slug' => 'desktop-development',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Game Development',
                'slug' => 'game-development',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Machine Learning',
                'slug' => 'machine-learning',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Artificial Intelligence',
                'slug' => 'artificial-intelligence',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Internet of Things',
                'slug' => 'internet-of-things',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        CategoryProject::insert($category_projects);
    }
}
