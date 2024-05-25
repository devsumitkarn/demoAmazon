<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthUserController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->all();
        $data['user_type'] = 1;
        User::create($data);
        return to_route('user.login'); 
    }

    public function login(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        if(Auth::attempt($data))
        {
            return to_route('user.pages.dashboard');
        }
        else
        {
            return to_route('user.login');
        }
    }

    Public function logout()
    {
        Auth::logout();
        return to_route('user.login');
    }
}
