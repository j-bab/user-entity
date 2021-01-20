<?php
namespace Attractions\Domain\Value;

trait AssertValidEmailTrait {

   static  function assertValidEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            throw new \InvalidArgumentException(get_class() . ' must be a valid email address');
        }
    }
}