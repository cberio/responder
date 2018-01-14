<?php

namespace App\Transformers;

use App\Photo;
use Flugg\Responder\Transformers\Transformer;

class PhotoTrsanformer extends Transformer
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
     * @param  \App\Photo $photo
     * @return array
     */
    public function transform(Photo $photo)
    {
        return [
            'id' => (int) $photo->id,
            'user_id' => (int) $photo->user_id,
            'order' => (int) $photo->order,
            'path' => $photo->path,
        ];
    }
}
