<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>1,
            'category_id'=>rand(1, 5),
            'title'=>$this->faker->sentence(4),
            'short_content'=>$this->faker->sentence(15),
            'content'=>$this->faker->sentence(12),

        ];
    }
}
