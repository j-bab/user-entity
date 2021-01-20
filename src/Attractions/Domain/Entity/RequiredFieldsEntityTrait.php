<?php

namespace Attractions\Domain\Entity;

trait RequiredFieldsEntityTrait
{


    protected function listAllProperties()
    {
        return array_keys(get_object_vars($this));
    }

    protected function assertFieldsSet($data, $fieldList)
    {
        $sharedKeys = array_intersect(array_keys($data), $fieldList);
        $missingKeys = array_diff($fieldList, $sharedKeys);
        if (count($missingKeys) > 0) {
             throw new \InvalidArgumentException(get_class() . ' is missing parameters ' . implode($missingKeys,', '));
        }
        return true;
    }


}