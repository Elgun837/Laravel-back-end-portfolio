<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    public function index(){
        $slides = Slider::all();
        return view('dashboard.sliders.main-slider', compact('slides'));
    }
    
}
