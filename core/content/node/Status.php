<?php
namespace inaden\content\node;

use inaden\utils\ValueObjectInterface;

class Status implements ValueObjectInterface
{

  protected $value;
  
  public function __construct($value) {
    
    if(false === is_string($value)) {
      throw new Exception('Invalid Value');
    }

    $this->value = $value;
  }

  public static function create() {
    $value = func_get_args(0);
    return new static($value);
  }

  public function toNative() {
    return $this->value;
  }

  public function __toString() {
    return $this->toNative();
  }
}