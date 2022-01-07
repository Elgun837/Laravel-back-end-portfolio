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
            'tel_number' => '+994777777777',
            'email' => 'elgun.office@bk.ru',
            'location' => 'Baku, Caspian Plaza',
            'map' =>
                '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.0608316723446!2d49.82649351523083!3d40.38534436547196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d9be60052ab%3A0xd7852fa710c6b11a!2sCaspian%20Plaza!5e0!3m2!1sru!2s!4v1641360092755!5m2!1sru!2s" width="100%" height="500px" frameborder="0" style="border:0"  allowfullscreen="" loading="lazy"></iframe>',
        ];
    }
}
