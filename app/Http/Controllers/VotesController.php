<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    State,
    Position,
    Votes,
    User,
    Contestant,
    LocalGov,
    Voters,
};
use Illuminate\Support\Facades\Auth;

class VotesController extends Controller
{
    // generate resource controller functions
    public function index()
    {
        $votes = Votes::all();
        $user = Auth::user();
        $role = $user->getRoleNames()->first();
        $states = State::all();
        $local_govs = LocalGov::all();
        $contestants = Contestant::all();
        $voter = Voters::where('user_id', $user->id)->first();
        // dd($voter);
        // get positions where the state_id is equal to the state_id of the voter or the local_gov_id is equal to the local_gov_id of the voter or the position has no state_id and no local_gov_id
        $positions = Position::where('states_id', $voter->state_id)
            ->orWhere('local_govs_id', $voter->local_gov_id)
            ->orWhereNull('states_id', $voter->state_id)
            ->orWhereNull('local_govs_id', $voter->local_gov_id)
            ->get();

        // get the positons that the voter has voted for
        $voted_positions = Votes::where('user_id', $user->id)->paginate(10);
        // get the positions that the voter has not voted for
        $not_voted_positions = $positions->diff($voted_positions)->where('user_id', $user->id);
        // dd($not_voted_positions);
        return view('vote.index', compact('votes',
                                          'role',
                                          'user',
                                          'positions',
                                          'states',
                                          'local_govs',
                                          'contestants',
                                          'voter',
                                          'voted_positions',
                                          'not_voted_positions'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request, Position $position)
    {
        // get the user
        $user = Auth::user();
        // add the user_id to the request and the position_id to the request

        $request->request->add(['user_id' => $user->id]);
        $request->request->add(['position_id' => $position->id]);
        // add the voter state_id and local_gov_id to the request
        $voter = Voters::where('user_id', $user->id)->first();
        $request->request->add(['state_id' => $voter->state_id]);
        $request->request->add(['local_gov_id' => $voter->local_gov_id]);
        // Make a new vote with the request data
        // dd($request->all());
        $vote = Votes::create($request->all());
        // if the position_id in the request is equal to
        return redirect()->route('vote')->with('success', 'Vote casted successfully');
    }

    public function show(Votes $votes)
    {
        //
    }

    public function edit(Votes $votes)
    {
        //
    }

    public function update(Request $request, Votes $vote)
    {
        //update the vote
        // add the user_id to the request and the position_id to the request
        $user = Auth::user();
        $request->request->add(['user_id' => $user->id]);
        $request->request->add(['position_id' => $vote->position_id]);
        // add the voter state_id and local_gov_id to the request
        $voter = Voters::where('user_id', $user->id)->first();
        $request->request->add(['state_id' => $voter->state_id]);
        $request->request->add(['local_gov_id' => $voter->local_gov_id]);

        $vote->update($request->all());
        return redirect()->route('vote')->with('success', 'Vote updated successfully');
    }



}

