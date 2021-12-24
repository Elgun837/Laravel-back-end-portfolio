<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $settings = Setting::find(1);
        $teams = Team::all();
        return view('index', compact('settings','teams'));
    }
}
