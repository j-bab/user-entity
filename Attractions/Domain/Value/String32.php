<?php

namespace Attractions\Domain\Value;


final class String32 extends AbstractStringValue
{
    use AssertStringLengthTrait;

    const MAX_LENGTH = 32;

    protected function validate($string){
        $this->assertMaxLength($string, self::MAX_LENGTH);
    }

}