<?php
namespace Attractions\Domain\Value;

trait AssertStringLengthTrait {

   static function assertMaxLength($string, $maxLength){
        if (mb_strlen($string) > $maxLength) {
            throw new \InvalidArgumentException(get_class() . ' maximum length of ' . $maxLength . ' Characters');
        }
    }
}