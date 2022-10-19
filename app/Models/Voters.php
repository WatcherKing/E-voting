<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{
    LocalGov,
    Position,
    Vote,
    Voter,
    Contestant,
    State,
    User,
};


class Voters extends Model
{
    use HasFactory;

    protected $fillable = [
        'local_gov_id',
        'state_id',
        'user_id',
        'name',
        'vin',
        'age',
        'image',
        'dob',
        'address',
        'phone',
        'gender',
        'voter_code',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function local_gov()
    {
        return $this->belongsTo(LocalGov::class, 'local_gov_id');
    }

}
