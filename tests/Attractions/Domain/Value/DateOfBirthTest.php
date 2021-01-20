<?php

use PHPUnit\Framework\TestCase;

final class DateOfBirthTest extends TestCase
{

    public function testValidString()
    {
        $dob = '13011985';
        $dateOfBirth = new \Attractions\Domain\Value\DateOfBirth($dob);
        $this->assertEquals($dob,$dateOfBirth->get());
    }


    public function testMinimumAge()
    {
        $dob = '13012010';
        $this->expectException(InvalidArgumentException::class);
        $dateOfBirth = new \Attractions\Domain\Value\DateOfBirth($dob);
    }


    public function badDates(): array
    {
        return [
            [''],
            ['0'],
            ['thisstring'],
        ];
    }


    /**
     * @dataProvider badDates
     */
    public function testInvalidString($badDate): void
    {
        $this->expectException(InvalidArgumentException::class);
        $dateOfBirth = new \Attractions\Domain\Value\DateOfBirth($badDate);
    }

}

