<?php

namespace Attractions\Domain\Value;

abstract class AbstractDateTimeValue implements StringValueInterface
{

    const DATE_FORMAT = 'dmY';

    /**
     * @var \DateTime
     */
    protected $value;

    public function __construct(string $string)
    {
        return $this->set($string);
    }

    final public function get(): string
    {
        return $this->value->format($this::DATE_FORMAT);
    }

    final public function set(string $string): AbstractDateTimeValue
    {
        $date = $this->toDateTime($string);
        $this->validate($date);
        $this->value = $date;
        return $this;
    }

    final private function toDateTime(string $string): \DateTime
    {

        $dateTime = \DateTime::createFromFormat($this::DATE_FORMAT, $string);
        if ($dateTime === false) {
            throw new \InvalidArgumentException(get_class() . ' must be a valid date format ' . $this::DATE_FORMAT);
        }
        return $dateTime;
    }

    abstract protected function validate(\DateTime $string): bool;

}