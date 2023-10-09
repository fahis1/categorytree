<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'name' => fake()->name(),
            // 'slug' => fake()->slug(),
            // 'meta_title' => fake()->title(),
            // 'meta_description' => fake()->text(),
            // 'image_src' => fake()->image(),
            // 'parentId' => fake()->id(),
        ];
    }
}
