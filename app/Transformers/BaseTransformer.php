<?php
/**
 * Created by PhpStorm.
 * User: jws85
 * Date: 2018-01-14
 * Time: 오후 9:37
 */

namespace App\Transformers;

use Flugg\Responder\Transformers\Transformer;
use Illuminate\Database\Eloquent\Model;
use League\Fractal\Resource\ResourceInterface;

class BaseTransformer extends Transformer
{
    protected function includeResourceFromModel(Model $model, string $identifier): ResourceInterface
    {
        $data = $this->resolveRelation($model, $identifier);

        if (! count($data)) {
            return $this->resource($data, null, $identifier);
        } elseif (key_exists($identifier, $this->resources)) {
            return $this->resources[$identifier]->setData($data);
        }

        if (method_exists($data, 'getResourceKey')) {
            $identifier = $data->getResourceKey() ?: $identifier;
        }

        return $this->resources[$identifier] = $this->resource($data, null, $identifier);
    }
}