<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{
    LocalGov,
    Position,
    Votes,
    User,
};


class Contestant extends Model
{
    use HasFactory;

    protected $fillable = [
        'position_id',
        'state_id',
        'local_gov_id',
        'name',
        'age',
        'contestant_no',
        'image',
        'party',
        'is_active',
    ];

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function local_gov()
    {
        return $this->belongsTo(LocalGov::class, 'local_gov_id');
    }

    public function votes()
    {
        return $this->hasMany(Votes::class);
    }

    public function voters()
    {
        return $this->hasMany(User::class);
    }
}
