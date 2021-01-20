<?php

namespace Attractions\Domain\Entity;

use Attractions\Domain\Value\DateOfBirth;
use Attractions\Domain\Value\String32;
use Attractions\Domain\Value\EmailAddress;

class User extends AbstractEntity
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

    use RequiredFieldsEntityTrait;

    public function __construct(array $data)
    {
        $requiredFields = $this->listAllProperties();
        $this->assertFieldsSet($data, $requiredFields);
        return parent::__construct($data);
    }

    public function getFirstName(): string
    {
        return $this->firstName->get();
    }

    public function setFirstName(string $string): User
    {
        $this->firstName = new String32($string);
        return $this;
    }

    public function getLastName(): string
    {
        return $this->firstName->get();
    }

    public function setLastName(string $string): User
    {
        $this->lastName = new String32($string);
        return $this;
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress->get();
    }

    public function setEmailAddress(string $string): User
    {
        $this->emailAddress = new EmailAddress($string);
        return $this;
    }

    public function getPasswordHash(): string
    {
        return $this->passwordHash->get();
    }

    public function setPasswordHash(string $string): User
    {
        $this->passwordHash = new String32($string);
        return $this;
    }

    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth->get();
    }

    public function setDateOfBirth(string $string): User
    {
        $this->dateOfBirth = new DateOfBirth($string);
        return $this;
    }

    public function getAge(): int
    {
        return $this->dateOfBirth->getAge();
    }
}
