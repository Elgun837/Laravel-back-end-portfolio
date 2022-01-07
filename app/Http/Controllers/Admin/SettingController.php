<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SettingController extends Controller
{
    public function index(){
        $settings = Setting::find(1);
        return view('dashboard.settings.index', compact('settings'));
    }
    public function update(Request $request){
        $settings = Setting::find(1);
        $this->validate($request,[
            'title' => 'required',
            'subtitle' => 'required',
            'logo' => 'image|nullable|mimes:png,jpeg,jpg,svg',
            'favicon' => 'image|nullable|mimes:png,jpeg,jpg,svg'
        ]);

        $settings->title       = $request->title;
        $settings->subtitle    = $request->subtitle;
        $settings->author      = $request->author;
        $settings->copyright   = $request->copyright;
        $settings->description = $request->description;
        $settings->keywords    = $request->keywords;

        if($request->hasFile('logo') ){

            $fileName = 'logo'.time(). '.'.$request->logo->extension();
            $fileNameWithUpload = "storage/uploads/settings/".$fileName;
            $request->logo->storeAs('public/uploads/settings', $fileName);
            $settings->logo = $fileNameWithUpload;
        }
        else{
            $fileName = 'default.jpg';
            $fileNameWithUpload = "storage/uploads/settings/".$fileName;
            $settings->logo = $fileNameWithUpload;
        }

        if($request->hasFile('favicon') ){
            $fileName = 'favicon'.time(). '.'.$request->favicon->extension();
            $fileNameWithUpload = "storage/uploads/settings/".$fileName;

            $request->favicon->storeAs('public/uploads/settings', $fileName);
            $settings->favicon = $fileNameWithUpload;
        }
        else{
            $fileName = 'default.jpg';
            $fileNameWithUpload = "storage/uploads/settings/".$fileName;
            $settings->favicon = $fileNameWithUpload;
        }
        $settings->save();

        return redirect()->back();
    }
}
