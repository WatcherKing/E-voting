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
        'is_active',
    ];

    public function voter()
    {
        return $this->belongsTo(User::class);
    }

    public function contestant()
    {
        return $this->belongsTo(Contestant::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function local_gov()
    {
        return $this->belongsTo(LocalGov::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }


}
