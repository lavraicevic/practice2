<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>fake()->numberBetween(1,10),
            'category_id'=>fake()->numberBetween(1,10),
            'tags_id'=>fake()->numberBetween(1,20),
            'title'=>substr(fake()->sentence(5, true), 0, -1),
            'image'=>fake()->imageUrl(),
            'description'=>fake()->paragraphs(4,true),

        ];
    }
}
