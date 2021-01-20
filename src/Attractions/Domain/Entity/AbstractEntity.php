<?php

namespace Attractions\Domain\Entity;


abstract class AbstractEntity
{

    public function __construct(array $data)
    {
        $this->populateFromArray($data);
    }

    protected function populateFromArray(array $data)
    {
        foreach ($data AS $property => $value) {
            $methodName = 'set' . ucfirst($property);
            if (method_exists($this, $methodName)) {
                $this->{$methodName}($value);
            }
        }
        return $this;
    }

}
