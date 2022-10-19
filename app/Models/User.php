<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Models\{
    State,
    Position,
    Vote,
    Voters,
    Contestant,
    LocalGov,
};

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'voter_no',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function voter()
    {
        return $this->belongsTo(Voters::class);
    }

    public function contestants()
    {
        return $this->hasManyThrough(Contestant::class, Vote::class);
    }

    public function positions()
    {
        return $this->hasManyThrough(Position::class, Vote::class);
    }

    public function local_govs()
    {
        return $this->hasManyThrough(LocalGov::class, Vote::class);
    }

    public function states()
    {
        return $this->hasManyThrough(State::class, Vote::class);
    }

    public function local_votes()
    {
        return $this->hasManyThrough(Vote::class, LocalGov::class);
    }

    public function local_positions()
    {
        return $this->hasManyThrough(Position::class, LocalGov::class);
    }

    public function local_contestants()
    {
        return $this->hasManyThrough(Contestant::class, LocalGov::class);
    }

    public function local_voters()
    {
        return $this->hasManyThrough(Voters::class, LocalGov::class);
    }

    public function state_votes()
    {
        return $this->hasManyThrough(Vote::class, State::class);
    }

    public function state_positions()
    {
        return $this->hasManyThrough(Position::class, State::class);
    }

    public function state_contestants()
    {
        return $this->hasManyThrough(Contestant::class, State::class);
    }

    public function state_voters()
    {
        return $this->hasManyThrough(Voters::class, State::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function local_gov()
    {
        return $this->belongsTo(LocalGov::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function contestant()
    {
        return $this->belongsTo(Contestant::class);
    }

    public function vote()
    {
        return $this->belongsTo(Vote::class);
    }

    public function local_votes_count()
    {
        return $this->local_votes()->count();
    }

    public function local_positions_count()
    {
        return $this->local_positions()->count();
    }

    public function local_contestants_count()
    {
        return $this->local_contestants()->count();
    }

    public function local_voters_count()
    {
        return $this->local_voters()->count();
    }

    public function state_votes_count()
    {
        return $this->state_votes()->count();
    }

    public function state_positions_count()
    {
        return $this->state_positions()->count();
    }

    public function state_contestants_count()
    {
        return $this->state_contestants()->count();
    }

    public function state_voters_count()
    {
        return $this->state_voters()->count();
    }

    public function votes_count()
    {
        return $this->votes()->count();
    }

    public function voters_count()
    {
        return $this->voters()->count();
    }

    public function contestants_count()
    {
        return $this->contestants()->count();
    }

    public function positions_count()
    {
        return $this->positions()->count();
    }

    public function local_govs_count()
    {
        return $this->local_govs()->count();
    }

    public function states_count()
    {
        return $this->states()->count();
    }

    public function is_admin()
    {
        return $this->role === 'admin';
    }

    public function is_voter()
    {
        return $this->role === 'voter';
    }


}
