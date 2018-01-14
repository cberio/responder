<?php
/**
 * Created by PhpStorm.
 * User: jws85
 * Date: 2018-01-14
 * Time: 오전 12:12
 */

namespace App\Serializer;

use Flugg\Responder\Serializers\SuccessSerializer;
use League\Fractal\Resource\ResourceInterface;

class ApiSerializer extends SuccessSerializer
{
    /**
     * Serialize collection resources.
     *
     * @param  string $resourceKey
     * @param  array  $data
     * @return array
     */
    public function collection($resourceKey, array $data)
    {
        return ['data' => $data];
    }

    /**
     * Serialize item resources.
     *
     * @param  string $resourceKey
     * @param  array  $data
     * @return array
     */
    public function item($resourceKey, array $data)
    {
        return ['data' => $data];
    }

    /**
     * Merge includes into data.
     *
     * @param  array $transformedData
     * @param  array $includedData
     * @return array
     */
    public function mergeIncludes($transformedData, $includedData)
    {
        foreach (array_keys($includedData) as $key) {
            $includedData[$key] = $includedData[$key]['data'];
        }

        return array_merge($transformedData, $includedData);
    }

    /**
     * Format the included data.
     *
     * @param  \League\Fractal\Resource\ResourceInterface $resource
     * @param  array                                      $data
     * @return array
     */
    public function includedData(ResourceInterface $resource, array $data)
    {
        return [];
    }
}