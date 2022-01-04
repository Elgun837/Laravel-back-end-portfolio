<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "tel_number" => "+994777777777",
            "email" => "elgun.office@bk.ru",
            "location" => "Baku, Caspian Plaza",
        ];
    }
}
