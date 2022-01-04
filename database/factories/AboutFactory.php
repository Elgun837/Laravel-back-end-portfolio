<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "page_subtitle" => "Information title",
            "about_title" => "Info desc 1",
            "about_subtitle" => "Info desc 2",
            "about_image" => "Information title",
            "about_description" => "Info desc 1",
            "about_backgorund_image" => "Info desc 2",
        ];
    }
}
