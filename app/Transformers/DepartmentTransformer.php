<?php

namespace App\Transformers;

/**
 * Class DepartmentTransformer
 *
 * Filter all out-going data
 */
class DepartmentTransformer implements TransformerInterface
{
    /**
     * {@inheritDoc}
     */
    public function transformCollection($items, $type = '')
    {
        $data = [];

        // iterate all records
        foreach ($items as $item) {
            $data[] = $this->transform($item);
        }

        return array_values(array_sort($data, function ($value) {
            return $value['name'];
        }));
    }

    /**
     * {@inheritDoc}
     */
    public function transform($item)
    {
        return [
            'id'    => $item->id,
            'name'  => $item->name,
        ];
    }
}