<?php

namespace App;

use App\Transformers\UserStateTransformer;
use Flugg\Responder\Contracts\Transformable;
use Illuminate\Database\Eloquent\Model;

class UserState extends Model implements Transformable
{
    protected $fillable = [
        'is_inactivate', 'is_out', 'is_pending_out', 'is_block'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transformer()
    {
        return UserStateTransformer::class;
    }

    public function getResourceKey()
    {
        return 'user_state';
    }
}
