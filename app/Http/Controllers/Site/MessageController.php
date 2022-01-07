<?php

namespace App\Http\Controllers\Site;

use App\Models\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function send( Request $request){
        $validated = $request->validate([
            "title" => "required",
            "body"  => "required",
            "email" => "email|required"
        ]);
        $messages = Message::create($validated);
        return response(['success' => 'true'], 200);
    }
}
