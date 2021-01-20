<?php
require './vendor/autoload.php';
$user = new \Attractions\Domain\Entity\User([
    'firstName' => 'james',
    'lastName' => 'Testington',
    'dateOfBirth' => '13012008',
    'emailAddress' => 'bab_2k@hot.de',
    'passwordHash' => 'bdase',
]);
print $user->getDateOfBirth() . PHP_EOL;
print $user->getAge() . PHP_EOL;