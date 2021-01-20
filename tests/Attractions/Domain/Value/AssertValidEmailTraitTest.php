<?php

use PHPUnit\Framework\TestCase;

final class AssertValidEmailTraitTest extends TestCase
{
    public function validEMails(): array
    {
        return [
            ['email@example.com'],
            ['firstname.lastname@example.com'],
            ['email@subdomain.example.com'],
            ['firstname+lastname@example.com'],
            ['"email"@example.com'],
            ['1234567890@example.com'],
            ['email@example-one.com'],
            ['_______@example.com'],
            ['email@example.name'],
            ['email@example.museum'],
            ['email@example.co.jp'],
            ['firstname-lastname@example.com'],
        ];
    }

    /**
     * @dataProvider validEmails
     */
    public function testValidEmail($validEmail): void
    {
        $mock = $this->getMockForTrait('Attractions\Domain\Value\AssertValidEmailTrait');
        $this->assertTrue($mock->assertValidEmail($validEmail));
    }

    public function invalidEmails(): array
    {
        return [
            ['plainaddress'],
            ['#@%^%#$@#$@#.com'],
            ['@example.com'],
            ['Joe Smith <email@example.com>'],
            ['    email.example.com'],
            ['email@example@example.com'],
            ['    .email@example.com'],
            ['email.@example.com'],
            ['email..email@example.com'],
            ['あいうえお@example.com'],
            ['email@example.com (Joe Smith)'],
            ['email@example'],
            ['email@-example.com'],
            ['email@111.222.333.44444'],
            ['email@example..com'],
            ['Abc..123@example.com']
        ];
    }


    /**
     * @dataProvider invalidEmails
     */
    public function testInvalidEmail($invalidEmail): void
    {

        $mock = $this->getMockForTrait('Attractions\Domain\Value\AssertValidEmailTrait');
        $this->expectException(InvalidArgumentException::class);
        $mock->assertValidEmail($invalidEmail);

    }
}