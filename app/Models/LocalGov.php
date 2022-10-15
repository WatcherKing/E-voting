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
};

class LocalGov extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'state_id',
        'is_active',
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function contestants()
    {
        return $this->hasMany(Contestant::class);
    }

    public function voters()
    {
        return $this->hasMany(User::class);
    }

    public function votes()
    {
        return $this->hasManyThrough(Vote::class, User::class);
    }

    public function positions()
    {
        return $this->hasMany(Position::class);
    }
}
