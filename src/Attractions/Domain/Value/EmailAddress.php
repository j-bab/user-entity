<?php

namespace Attractions\Domain\Value;


final class EmailAddress extends AbstractStringValue
{

    use AssertStringLengthTrait;
    use AssertValidEmailTrait;

    const MAX_LENGTH = 254;

    protected function validate($string)
    {
        $this->assertMaxLength($string, self::MAX_LENGTH);
        $this->assertValidEmail($string);
    }

}