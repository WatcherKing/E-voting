<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{
    LocalGov,
    Position,
    Vote,
    User,
};


class Contestant extends Model
{
    use HasFactory;

    protected $fillable = [
        'position_id',
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
        return $this->belongsTo(Position::class);
    }

    public function local_gov()
    {
        return $this->belongsTo(LocalGov::class);
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
