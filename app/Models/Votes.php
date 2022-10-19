<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{
    State,
    Position,
    Vote,
    User,
    Contestant,
    LocalGov,
    Voters,
};

class Votes extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'contestant_id',
        'position_id',
        'local_gov_id',
        'state_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function contestant()
    {
        return $this->belongsTo(Contestant::class, 'contestant_id');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function local_gov()
    {
        return $this->belongsTo(LocalGov::class, 'local_gov_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }


}
