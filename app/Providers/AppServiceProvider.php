<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\About;
use App\Models\Team;
use App\Models\Contact;
use App\Models\Slider;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            
        $settings = Setting::find(1);
        $view->with('settings', $settings);
        $teams = Team::all();
        $view->with('teams', $teams);
        $teams = Slider::all();
        $view->with('slides', $teams);
        $abouts = About::find(1);
        $view->with('abouts', $abouts);
        $contact = Contact::find(1);
        $view->with('abouts', $contact);
           
            
            
     });
    }
}
