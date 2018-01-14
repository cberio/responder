<?php

namespace App;

use App\Transformers\UserTransformer;
use Flugg\Responder\Contracts\Transformable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements Transformable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userState()
    {
        return $this->hasOne(UserState::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function transformer()
    {
        return UserTransformer::class;
    }
}
