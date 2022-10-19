<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VotersRequest;
use App\Models\User;
use App\Models\Voters;
use App\Models\State;
use App\Models\LocalGov;
use Auth;
use Crypt;


class VotersController extends Controller
{
    // Generate resource controller
    public function index()
    {
        $voters = Voters::paginate(15);
        $user = Auth::user();
        $role = $user->getRoleNames()->first();
        $states = State::all();
        $local_govs = LocalGov::all();
        return view('voters.index', compact('voters', 'role', 'user', 'states', 'local_govs'));
    }

    public function create()
    {
        //
    }

    public function store(VotersRequest $request, Voters $voter)
    {
        // store the voter
        // dd($request->all());
        // decrypt the voter_no and the vin and create a user
        // encrypt the request->all

        $request->merge(['name' => Crypt::encrypt($request->name)]);
        $request->merge(['vin' => Crypt::encrypt($request->vin)]);
        $request->merge(['age' => Crypt::encrypt($request->age)]);
        $request->merge(['dob' => Crypt::encrypt($request->dob)]);
        // $request->merge(['address' => Crypt::encrypt($request->address)]);
        $request->merge(['phone' => Crypt::encrypt($request->phone)]);
        $request->merge(['gender' => Crypt::encrypt($request->gender)]);
        $request->merge(['voter_code' => Crypt::encrypt($request->voter_code)]);

        // dd($request->all());
        $vin = Crypt::decrypt($request->vin);
        $username = Crypt::decrypt($request->name);
        $password = Crypt::decrypt($request->voter_code);
        // dd($username, $password, $vin);
        $user = User::create([
            'name' => $request->name,
            'password' => bcrypt($password),
            'voter_no' => $vin,
        ]);

        // assign the role of voter to the user through spatie
        $user->assignRole('voter');
        // get the just created user id and store it in the voters table
        $request->merge(['user_id' => $user->id]);
        // dd($request->all());

        // store the voter
        $voter->create($request->all());
        return redirect()->route('voters')->withStatus('Voter Registered Successfully');
    }

    public function show(Voters $voter)
    {
        //show the voter
        $user = Auth::user();
        $role = $user->getRoleNames()->first();
        return view('voters.show', compact('voter', 'role', 'user'));
    }

    public function edit(Voters $voter)
    {
        //
    }

    public function update(VotersRequest $request, Voters $voter)
    {
        //update the voter
        // dd($request->all());
        $request->merge(['name' => Crypt::encrypt($request->name)]);
        $request->merge(['vin' => Crypt::encrypt($request->vin)]);
        $request->merge(['age' => Crypt::encrypt($request->age)]);
        $request->merge(['dob' => Crypt::encrypt($request->dob)]);
        // $request->merge(['address' => Crypt::encrypt($request->address)]);
        $request->merge(['phone' => Crypt::encrypt($request->phone)]);
        $request->merge(['gender' => Crypt::encrypt($request->gender)]);
        $request->merge(['voter_code' => Crypt::encrypt($request->voter_code)]);
        // update the user
        $user = User::find($voter->user_id);
        $vin = Crypt::decrypt($request->vin);
        $password = Crypt::decrypt($request->voter_code);
        $user->update([
            'name' => $request->name,
            'password' => bcrypt($password),
            'voter_no' => $vin,
        ]);
        $voter->update($request->all());

        return redirect()->route('voters')->withStatus('Voter Updated Successfully');
    }

    public function destroy(Voters $voter)
    {
        //
    }


    // create a function to get all the voters and change the status to 1
    public function approveVoters()
    {
        $voters = Voters::where('status', 0)->get();
        foreach ($voters as $voter) {
            $voter->update(['status' => 1]);
        }
        return redirect()->route('voters')->withStatus('Voters Approved Successfully');
    }

    public function unapproveVoters()
    {
        $voters = Voters::where('status', 1)->get();
        foreach ($voters as $voter) {
            $voter->update(['status' => 0]);
        }
        return redirect()->route('voters')->withStatus('Voters Disapproved Successfully');
    }

    // create a func to get a voter and change the status to 0
    public function disapproveVoter(Voters $voter)
    {
        $voter->update(['status' => 0]);
        return redirect()->route('vote')->withStatus('Voted Successfully');
    }

}
