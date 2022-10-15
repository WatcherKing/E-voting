<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{
    LocalGov,
    Position,
    Vote,
    User,
    Contestant,
    State,
};

class Position extends Model
{
    use HasFactory;

    protected $fillable = [
        'local_gov_id',
        'state_id',
        'name',
        'is_active',
    ];

    public function local_gov()
    {
        return $this->belongsTo(LocalGov::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function contestants()
    {
        return $this->hasMany(Contestant::class);
    }

    public function votes()
    {
        return $this->hasManyThrough(Vote::class, Contestant::class);
    }

    public function voters()
    {
        return $this->hasManyThrough(User::class, Contestant::class);
    }
}
