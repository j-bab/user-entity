<?php

use PHPUnit\Framework\TestCase;
use Attractions\Domain\Entity\User;

final class UserTest extends TestCase
{


    public function testConstructInvalidArray()
    {
        $userData = [
            'firstName' => 'james',
            'lastName' => 'Testington',
            'dateOfBirth' => '13012008',
            'emailAddress' => 'bab_2k@hot.de',
        ];
        $this->expectException(InvalidArgumentException::class);
        $user = new User($userData);
    }


    public function testConstructValidArray()
    {
        $userData = [
            'firstName' => 'james',
            'lastName' => 'Testington',
            'dateOfBirth' => '13012008',
            'emailAddress' => 'bab_2k@hot.de',
            'passwordHash' => 'bdase',
        ];
        $user = new User($userData);
        $this->assertEquals(
            $userData['dateOfBirth'],
            $user->getDateOfBirth()
        );
    }

    public function testDateOfBirth(): void
    {
        $user = new User([
            'firstName' => 'james',
            'lastName' => 'Testington',
            'dateOfBirth' => '13012008',
            'emailAddress' => 'bab_2k@hot.de',
            'passwordHash' => 'bdase',
        ]);
        $this->assertEquals(
            '13012008',
            $user->getDateOfBirth()
        );
        $this->assertEquals(
            13,
            $user->getAge()
        );
    }


}

