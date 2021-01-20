<?php
namespace Attractions\Domain\Value;

abstract class AbstractStringValue implements StringValueInterface
{


    /**
     * @var string
     */
    protected $value;

    const MAX_LENGTH =0;

   final  public function __construct(string $string){
        return $this->set( $string);
    }

   final public function get():string
    {
        return $this->value;
    }

   final public function set(string $string):AbstractStringValue
   {
        $this->validate($string);
        $this->value = $string;
        return $this;
    }

     abstract protected function validate(string $string):bool;

}