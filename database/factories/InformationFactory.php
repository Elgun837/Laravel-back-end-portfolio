<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Information title',
            'description_1' => 'Info desc 1',
            'description_2' => 'Info desc 2',
        ];
    }
}
