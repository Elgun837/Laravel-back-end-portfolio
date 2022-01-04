<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
   public function index(){
        $abouts = About::find(1); 
       
       return view('dashboard.about.index', compact('abouts'));
   }

   public function update(Request $request){
    $abouts = About::find(1);
    
    $abouts->page_subtitle          = $request->page_subtitle;
    $abouts->about_title            = $request->about_title;
    $abouts->about_subtitle         = $request->about_subtitle;
    $abouts->about_image            = $request->about_image;
    $abouts->about_description      = $request->about_description;
    $abouts->about_background_image = $request->about_background_image;
    
    if($request->hasFile('about_image') ){

        $fileName = 'about_img_'.time(). '.'.$request->about_image->extension();
        $fileNameWithUpload = "storage/uploads/about/".$fileName;
        $request->about_image->storeAs('public/uploads/about', $fileName);
        $abouts->about_image = $fileNameWithUpload;
    }
    if($request->hasFile('about_background_image') ){

        $fileName = 'about_back_img_'.time(). '.'.$request->about_background_image->extension();
        $fileNameWithUpload = "storage/uploads/about/".$fileName;
        $request->about_background_image->storeAs('public/uploads/about', $fileName);
        $abouts->about_background_image = $fileNameWithUpload;
    }
    
    $abouts->save();

    return redirect()->back()->with('success','Succesfully updated!');
   }
}
