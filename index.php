<?php

class Autoloader
{
    public static function register()
    {
        spl_autoload_register(function ($class) {
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
            if (file_exists($file)) {
                require $file;
                return true;
            }
            return false;
        });
    }
}

Autoloader::register();

$user = new \Attractions\Domain\Entity\User([
    'firstName' => 'james',
    'lastName' => 'Testington',
    'dateOfBirth' => '13012008',
    'emailAddress' => 'bab_2k@hot.de',
    'passwordHash' => 'bdase',
]);
print $user->getDateOfBirth() . PHP_EOL;
print $user->getAge() . PHP_EOL;