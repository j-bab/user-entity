<?php

namespace Attractions\Domain\Value;

trait AssertDateTimeMinimumAgeTrait
{
    /**
     * Return Age in Years
     * @param \DateTime $date
     * @return Integer
     */
    static function ageFromDateTime(\DateTime $date): int
    {
        $now = new \DateTime('NOW');
        return $date->diff($now)->format('%y');
    }

    static function assertMinimumAge(\DateTime $date, $minAge)
    {
        if (self::ageFromDateTime($date) < $minAge) {
            throw new \InvalidArgumentException(get_class() . ' minimum age of ' . $minAge . ' years');
        }
        return true;
    }
}