<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PositionRequest;
use App\Models\Position;
use App\Models\State;
use App\Models\LocalGov;
use App\Models\User;
use App\Models\Contestant;
use App\Models\Vote;
use Auth;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positions = Position::paginate(25);
        $user = Auth::user();
        $role = $user->getRoleNames()->first();
        $states = State::all();
        $local_govs = LocalGov::all();

        return view('positions.index', compact('positions', 'role', 'user', 'states', 'local_govs'));
    }

    // function that gets the selected state_id and returns the local_govs
    public function getLocalGovs(State $state)
    {
        $local_govs = LocalGov::where('state_id', $state->id)->get();
        return response()->json($local_govs);
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
    public function store(PositionRequest $request, Position $position)
    {
        // store the position
        // dd($request->all());
        $position->create($request->all());

        return redirect()->route('positions')->withStatus('Position Registered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Position $position)
    {
        $user = Auth::user();
        $role = $user->getRoleNames()->first();
        $states = State::all();
        $local_govs = LocalGov::all();

        return view('positions.view', compact('position', 'role', 'user', 'states', 'local_govs'));
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
    public function update(PositionRequest $request, Position $position)
    {
        // update the position
        $position->update($request->all());

        return redirect()->route('positions')->withStatus('Position Updated Successfully');
    }

    // fun to change is_active status
    public function changeStatus(Position $position)
    {
        if ($position->is_active == 1) {
            $position->update(['is_active' => 0]);
        } else {
            $position->update(['is_active' => 1]);
        }

        return redirect()->route('positions')->withStatus('Position Status Changed Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Position $position)
    {
        // delete the position if it has no contestants
        if ($position->contestants->count() > 0) {
            return redirect()->route('positions')->withError('Position has contestants, delete contestants first');
        } else {
            $position->delete();
            return redirect()->route('positions')->withStatus('Position Deleted Successfully');
        }
    }
}
