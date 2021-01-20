<?php

use PHPUnit\Framework\TestCase;

final class EmailAddressTest extends TestCase
{

    public function longEmailAddress()
    {
        $stringLength = \Attractions\Domain\Value\EmailAddress::MAX_LENGTH;
        $chrList = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $domain = substr(str_shuffle(str_repeat($chrList, mt_rand(10, 100))), 1, $stringLength - 5);

        return [['a@' . $domain . '.com']];
    }

    /**
     * @dataProvider longEmailAddress
     */
    public function testTooLongValidEmail($email)
    {
        $this->expectException(InvalidArgumentException::class);
        $emailAddress = new \Attractions\Domain\Value\EmailAddress($email);
    }

    public function testValidEmail()
    {
        $string = 'james@website.com';
        $emailAddress = new \Attractions\Domain\Value\EmailAddress($string);
        $this->assertEquals($string, $emailAddress->get());
    }

    public function testInvalidEmail()
    {
        $string = 'james@website';
        $this->expectException(InvalidArgumentException::class);
        $emailAddress = new \Attractions\Domain\Value\EmailAddress($string);
    }


}

