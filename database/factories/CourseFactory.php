<?php

namespace Database\Factories;

use App\Models\Platform;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->sentence,
            'type' => rand(0, 1),
            'slug' => fake()->slug,
            'resources' => rand(1, 50),
            'price' => rand(0, 1) ? rand(1, 100) : 0.00,
            'year' => rand(2010, 2021),
            'image' => fake()->imageUrl(770, 270),
            'description' => fake()->paragraph,
            'link' => fake()->url(),
            'submitted_by' => User::all()->random()->id,
            'duration' => rand(0, 2),
            'difficulty_level' => rand(0, 2),
            'platform_id' => Platform::all()->random()->id,
        ];
    }
}
