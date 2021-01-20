<?php

namespace Attractions\Domain\Value;


final class DateOfBirth extends AbstractDateTimeValue
{
    use AssertDateTimeMinimumAgeTrait;

    const MINIMUM_AGE = '13';

    protected function validate(\DateTime $dateTime): bool
    {
        $this->assertMinimumAge($dateTime, self::MINIMUM_AGE);
        return true;
    }

    public function getAge(): int
    {
        return $this->ageFromDateTime($this->value);
    }
}