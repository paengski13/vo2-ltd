<?php

namespace App\Transformers;

/**
 * Class DepartmentTransformer
 *
 * Filter all out-going data
 */
class EmployeeTransformer implements TransformerInterface
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

        return $data;
    }

    /**
     * {@inheritDoc}
     */
    public function transform($item)
    {
        return [
            'first_name'  => $item->first_name,
            'last_name'   => $item->last_name,
            'department'  => $item->department->name,
            'profile'     => $item->profile,
        ];
    }
}