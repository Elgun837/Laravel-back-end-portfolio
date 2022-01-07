<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\About;
use App\Models\Team;
use App\Models\Contact;
use App\Models\Slider;
use App\Models\Message;
use App\Models\User;
use App\Models\Service;
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
        View::share('messages_alert',Message::where('seen_date',null)->get());
        View::composer('*', function ($view) {
        $user = User::find(1);
        $view->with('user',$user);  
        $settings = Setting::find(1);
        $view->with('settings', $settings);
        $teams = Team::all();
        $view->with('teams', $teams);
        $teams = Slider::all();
        $view->with('slides', $teams);
        $services = Service::all();
        $view->with('services', $services);
        $abouts = About::find(1);
        $view->with('abouts', $abouts);
        $contact = Contact::find(1);
        $view->with('contact', $contact);
        
            
            
     });
    }
}
