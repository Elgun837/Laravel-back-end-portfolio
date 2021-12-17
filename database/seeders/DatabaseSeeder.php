<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Setting::factory(1)->create();
        \App\Models\User::factory(1)->create();
        \App\Models\Team::factory(3)->create();
        \App\Models\Slider::factory(3)->create();
        \App\Models\Service::factory(4)->create();
        \App\Models\Information::factory(1)->create();

    }
}
