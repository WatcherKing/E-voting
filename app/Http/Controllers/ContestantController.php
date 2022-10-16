<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contestant;
use Auth;

class ContestantController extends Controller
{
    // generate resource controller
    public function index()
    {
        $contestants = Contestant::paginate(15);
        $user = Auth::user();
        $role = $user->getRoleNames()->first();
        return view('contestants.index', compact('contestants', 'role', 'user'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Contestant $contestant)
    {
        //
    }

    public function edit(Contestant $contestant)
    {
        //
    }

    public function update(Request $request, Contestant $contestant)
    {
        //
    }

    public function destroy(Contestant $contestant)
    {
        //
    }

}
