<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\AuthLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(AuthLoginRequest $request)
    {
        $data = $request->validated();
        unset($data['_token']);
        if(Auth::attempt($data))
        {
            return to_route('admin.users.create');
        }
        else
        {
            return to_route('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return to_route('login');
    }
}
