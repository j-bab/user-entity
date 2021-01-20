<?php

namespace Attractions\Domain\Value;

interface StringValueInterface
{
    public function get(): string;

    public function set(string $string);

}
