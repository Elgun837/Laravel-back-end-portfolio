<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\InformationRequest;
use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        return view('dashboard.information.index');
    }
    public function update(Request $request){

        $info = Information::find(1);
        $info->info_title               = $request->info_title;
        $info->info_subtitle            = $request->info_subtitle;
        $info->info_description         = $request->info_description;
        $info->info_section_title       = $request->info_section_title;
        $info->info_section_subtitle    = $request->info_section_subtitle;
        $info->info_section_description = $request->info_section_description;
        $info->facebook                 = $request->facebook;
        $info->instagram                = $request->instagram;
        $info->behance                  = $request->behance;
        $info->youtube                  = $request->youtube;
        $info->github                   = $request->github;
        $info->twitter                  = $request->twitter;
        if ($request->hasFile('info_image')) {
            $fileName = 'info_image' . time() . '.' . $request->info_image->extension();
            $fileNameWithUpload = 'storage/uploads/info/' . $fileName;
            $request->info_image->storeAs('public/uploads/info', $fileName);
            $settings->loinfo_imagego = $fileNameWithUpload;
        }
        if ($request->hasFile('info_section_image')) {
            $fileName =
                'info_section_image' . time() . '.' . $request->info_section_image->extension();
            $fileNameWithUpload = 'storage/uploads/info/' . $fileName;

            $request->info_section_image->storeAs('public/uploads/info', $fileName);
            $settings->info_section_image = $fileNameWithUpload;
        }
        $info->save();

        return redirect()->back();
    }
}
