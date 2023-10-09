<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create root categories
        $electronics = \App\Models\Category::create([
            'name' => 'Electronics',
            'slug' => 'electronics',
            'meta_title' => 'Electronics Category',
            'meta_description' => 'Description for Electronics Category',
            'image_src' => 'path/to/electronics/image.jpg',
            'searchable' => true,
            'enabled' => true,
            'parent_id' => NULL,
        ]);

        // // Create subcategories for Electronics
        // \App\Models\Category::create([
        //     'name' => 'Smartphones',
        //     'slug' => 'smartphones',
        //     'meta_title' => 'Smartphones Category',
        //     'meta_description' => 'Description for Smartphones Category',
        //     'image_src' => 'path/to/smartphones/image.jpg',
        //     'searchable' => true,
        //     'enabled' => true,
        //     'parent_id' => $electronics->id,
        // ]);

        // \App\Models\Category::create([
        //     'name' => 'Laptops',
        //     'slug' => 'laptops',
        //     'meta_title' => 'Laptops Category',
        //     'meta_description' => 'Description for Laptops Category',
        //     'image_src' => 'path/to/laptops/image.jpg',
        //     'searchable' => true,
        //     'enabled' => true,
        //     'parent_id' => $electronics->id,
        // ]);
    }
}
