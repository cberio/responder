<?php

namespace App\Transformers;

use App\UserState;

class UserStateTransformer extends BaseTransformer
{
    /**
     * List of available relations.
     *
     * @var string[]
     */
    protected $relations = ['user'];

    /**
     * List of autoloaded default relations.
     *
     * @var array
     */
    protected $load = [];

    /**
     * Transform the model.
     *
     * @param  \App\UserState $userState
     * @return array
     */
    public function transform(UserState $userState)
    {
        return [
            'user_id' => (int) $userState->user_id,
            'is_inactivate' => (bool) $userState->is_inactivate,
            'is_out' => (bool) $userState->is_out,
            'is_pending_out' => (bool) $userState->is_pending_out,
            'is_block' => (bool) $userState->is_block,
        ];
    }
}
