<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;    

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);
        $role = $user->getRoleNames()->first();
        return view('dashboard', compact('role', 'user'));
    }
}
