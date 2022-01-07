<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('dashboard.login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required',
        ]);

        if (
            !Auth::attempt([
                'email' => $request->email,
                'password' => $request->password,
            ])
        ) {
            return redirect()
                ->back()
                ->with('danger', 'Wrong Email or password!');
        }

        return redirect()->route('admin-panel.index');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin-panel.login');
    }
}
