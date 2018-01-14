<?php

namespace App\Transformers;

use App\User;

class UserTransformer extends BaseTransformer
{
    /**
     * List of available relations.
     *
     * @var string[]
     */
    protected $relations = [
        'userState',
        'photos'
    ];

    /**
     * List of autoloaded default relations.
     *
     * @var array
     */
    protected $load = [];

    /**
     * Transform the model.
     *
     * @param  \App\User $user
     * @return array
     */
    public function transform(User $user)
    {
        return [
            'id' => (int) $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ];
    }
}
