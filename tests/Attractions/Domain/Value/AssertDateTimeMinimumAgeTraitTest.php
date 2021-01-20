<?php

use PHPUnit\Framework\TestCase;

final class AssertDateTimeMinimumAgeTraitTest extends TestCase
{

    public function testAgeFromTime(): void
    {
        $mock = $this->getMockForTrait('Attractions\Domain\Value\AssertDateTimeMinimumAgeTrait');

        $old = new \DateTime('NOW');
        $old->sub(new DateInterval('P14Y'));
        $this->assertEquals(14,$mock->ageFromDateTime($old));

    }

    public function testMinimumAge(): void
    {

        $mock = $this->getMockForTrait('Attractions\Domain\Value\AssertDateTimeMinimumAgeTrait');

        $old = new \DateTime('NOW');
        $old->sub(new DateInterval('P14Y'));
        $this->assertTrue($mock->assertMinimumAge($old, 13));

        $young = new \DateTime('NOW');
        $young->sub(new DateInterval('P12Y'));
        $this->expectException(InvalidArgumentException::class);
        $mock->assertMinimumAge($young, 13);

    }
}

