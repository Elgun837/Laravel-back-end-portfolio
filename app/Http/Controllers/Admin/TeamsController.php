<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index(){
        return view('dashboard.team.index');
    }
    public function add(TeamRequest $request){
    $teams = Team::all();
    foreach ($teams as $team){
        $team->team_member_name = $request->member_name;
        }
    }
}
