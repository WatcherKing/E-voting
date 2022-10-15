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

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'is_active',
    ];

    public function local_govs()
    {
        return $this->hasMany(LocalGov::class);
    }

    public function local_positions()
    {
        return $this->hasManyThrough(Position::class, LocalGov::class);
    }

    public function local_contestants()
    {
        return $this->hasManyThrough(Contestant::class, LocalGov::class);
    }

    public function local_votes()
    {
        return $this->hasManyThrough(Vote::class, LocalGov::class);
    }

    public function local_voters()
    {
        return $this->hasManyThrough(User::class, LocalGov::class);
    }

    public function positions()
    {
        return $this->hasMany(Position::class);
    }

    public function contestants()
    {
        return $this->hasMany(Contestant::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function voters()
    {
        return $this->hasMany(User::class);
    }


}
