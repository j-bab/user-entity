<?php

namespace Attractions\Domain\Entity;

use Attractions\Domain\Value\DateOfBirth;
use Attractions\Domain\Value\String32;
use Attractions\Domain\Value\EmailAddress;

class User
{
    /**
     * @var String32
     */
    private $firstName;

    /**
     * @var String32
     */
    private $lastName;

    /**
     * @var DateOfBirth
     */
    private $dateOfBirth;

    /**
     * @var EmailAddress
     */
    private $emailAddress;

    /**
     * The secure hash of the password
     * @var String32
     */
    private $passwordHash;


    public function getFirstName(): string
    {
        return $this->firstName->get();
    }

    public function setFirstName($string): User
    {
        $this->firstName = new String32($string);
        return $this;
    }

    public function getLastName(): string
    {
        return $this->firstName->get();
    }

    public function setLastName($string): User
    {
        $this->lastName = new String32($string);
        return $this;
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress->get();
    }

    public function setEmailAddress($string): User
    {
        $this->emailAddress = new EmailAddress($string);
        return $this;
    }

    public function getPasswordHash(): string
    {
        return $this->passwordHash->get();
    }

    public function setPasswordHash($string): User
    {
        $this->passwordHash = new String32($string);
        return $this;
    }

    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth->get();
    }

    public function setDateOfBirth($string): User
    {
        $this->dateOfBirth = new DateOfBirth($string);
        return $this;
    }

    public function getAge(): int
    {
        return $this->dateOfBirth->getAge();
    }
}
