<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('dashboard.team.index', compact('teams'));
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
    public function store(TeamRequest $request)
    {


        if($request->hasFile('team_member_image')){
        $validated = $request->all();
        $file = $validated['team_member_image'];
        $extension = $file->getClientOriginalExtension();
        $real_name = $file->getClientOriginalName();
        Storage::disk('public')->makeDirectory('uploads/members');
        $folder = storage_path('app/public/uploads/members');
        $file_new_name = rand(0,90000)."-".md5($real_name).".".$extension;
        $file->move($folder,$file_new_name);
        $validated['team_member_image'] = $file_new_name;
        Team::create($validated);
        return redirect()->back()->with('success', 'Successfully  added!');

        }

        else{
            $fileName = 'default.jpg';
            $request['team_member_image'] = $fileName;
            Team::create($request->all());
            return redirect()->back()->with('success', 'Successfully  added!');
        }


        
    
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teams = Team::findOrFail($id);

        $teams->delete();

        return redirect()->back()->with('success','Succesfully deleted!');
    }
}
