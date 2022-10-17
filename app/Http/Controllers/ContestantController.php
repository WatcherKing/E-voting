<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContestantRequest;
use App\Models\Contestant;
use App\Models\Position;
use App\Models\State;
use App\Models\LocalGov;
use Auth;
use Illuminate\Support\Facades\Crypt;

class ContestantController extends Controller
{
    // generate resource controller
    public function index()
    {

        $contestants = Contestant::paginate(15);

        $user = Auth::user();
        $role = $user->getRoleNames()->first();
        $states = State::all();
        $local_govs = LocalGov::all();
        $positions = Position::all();
        return view('contestants.index', compact('contestants', 'role', 'user', 'states', 'local_govs', 'positions',));
    }

    public function create()
    {
        //
    }

    public function store(ContestantRequest $request, Contestant $contestant)
    {
        try {
            // store the contestant
        //  dd($request->all());
        // generate the contestant_no as a unique 6 digit number

        $contestant_no = mt_rand(100000, 999999);
        // check if the contestant_no already exists
        $check_contestant_no = Contestant::where('contestant_no', $contestant_no)->first();
        // if the contestant_no already exists, generate another contestant_no
        if ($check_contestant_no) {
            $contestant_no = mt_rand(100000, 999999);
        }
        // store the contestant_no in the request
        $request->merge(['contestant_no' => Crypt::encrypt($contestant_no)]);
        // dd($request->all());
        $contestant->create($request->all());

        return redirect()->route('contestants')->withStatus('Contestant Registered Successfully');
        } catch (Execption $e) {
            // return error message
            return back()->withError('An error occured while registering the contestant');
        }

    }

    // func to update status of contestant
    public function updateStatus(Contestant $contestant)
    {
        // dd($contestant);
        // check if the contestant is active
        if ($contestant->is_active == 1) {
            // if the contestant is active, deactivate the contestant
            $contestant->update(['is_active' => 0]);
            return back()->withStatus('Contestant Deactivated Successfully');
        } else {
            // if the contestant is inactive, activate the contestant
            $contestant->update(['is_active' => 1]);
            return back()->withStatus('Contestant Activated Successfully');
        }
    }

    public function show(Contestant $contestant)
    {
        // show the contestant
        $user = Auth::user();
        $role = $user->getRoleNames()->first();
        return view('contestants.show', compact('contestant', 'role', 'user'));
    }

    public function edit(Contestant $contestant)
    {
        //
    }

    public function update(Request $request, Contestant $contestant)
    {
        // update the contestant
        // dd($request->all());
        $contestant->update($request->all());
        return back()->withStatus('Contestant Updated Successfully');
    }

    public function destroy(Contestant $contestant)
    {
        // do not delete the contestant if the contestant has votes
        if ($contestant->votes->count() > 0) {
            return back()->withError('Contestant cannot be deleted because it has votes');
        } else {
            // delete the contestant
            $contestant->delete();
            return back()->withStatus('Contestant Deleted Successfully');
        }
    }

}
