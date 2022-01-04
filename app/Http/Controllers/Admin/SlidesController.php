<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;


class SlidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slider::all();
        return view('dashboard.sliders.main-slider', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slides = Slider::findOrFail($id);
        $slides->title       = $request->title;
        $slides->subtitle    = $request->subtitle;
        $slides->description      = $request->description;
        $slides->button   = $request->button;
        $slides->button_link = $request->button_link;
        if($request->hasFile('slide_image') ){

            $fileName = 'slide_img_'.time(). '.'.$request->slide_image->extension();
            $fileNameWithUpload = "storage/uploads/slider/".$fileName;
            $request->slide_image->storeAs('public/uploads/slider', $fileName);
            $slides->slide_image = $fileNameWithUpload;
        }
        
        $slides->save();

        return redirect()->back()->with('success','Succesfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        
        $slides = Slider::findOrFail($id);

        $slides->delete();

        return redirect()->back()->with('success','Succesfully deleted!');
    }
}
