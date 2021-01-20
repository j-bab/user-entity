<?php

namespace Attractions\Domain\Value;


final class DateOfBirth extends AbstractDateTimeValue
{
    use AssertDateTimeMinimumAgeTrait;

    const MINIMUM_AGE = '13';

    protected function validate(\DateTime $dateTime)
    {
        $this->assertMinimumAge($dateTime, self::MINIMUM_AGE);
    }

    public function getAge()
    {
        return $this->ageFromDateTime($this->value);
    }
}