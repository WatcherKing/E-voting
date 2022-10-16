<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;


class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->only('voter_no', 'password'))) {
            $user = Auth::user();
            if($user->hasRole('admin')){
                return redirect()->route('dashboard');
            }elseif ($user->hasRole('voter')){
                return redirect()->route('dashboard');
            }
        } else {
            return back()->withError('Invalid Credentials');
        }
    }

    // function to logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
