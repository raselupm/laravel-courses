<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'review_by' => User::all()->random()->id,
            'comment' => $this->faker->paragraph,
            'star' => $this->faker->numberBetween(1, 5),
            'course_id' => Course::all()->random()->id,
        ];
    }
}
