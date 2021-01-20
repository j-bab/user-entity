<?php

use PHPUnit\Framework\TestCase;

final class AssertStringLengthTraitTest extends TestCase
{

    public function testValidStringLength(): void
    {
        $mock = $this->getMockForTrait('Attractions\Domain\Value\AssertStringLengthTrait');
        $this->assertTrue($mock->assertMaxLength('123456789', 9));

    }

    public function testInvalidStringLength(): void
    {
        $mock = $this->getMockForTrait('Attractions\Domain\Value\AssertStringLengthTrait');
        $this->expectException(InvalidArgumentException::class);
        $mock->assertMaxLength('0123456789', 9);
    }


}

