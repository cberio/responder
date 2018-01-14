<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'path', 'order'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getResourceKey()
    {
        return 'user_photo';
    }
}
