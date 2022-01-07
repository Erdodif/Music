<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \mt_rand;

class MusicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'title' => $this->faker->words(mt_rand(1,5),true),
                'singer' => $this->faker->name(),
                'length' => mt_rand(60,600)
            ];
    }
}
