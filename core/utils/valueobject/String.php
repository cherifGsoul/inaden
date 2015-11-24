<?php

class String implements ValueObjects
{
  protected $value;
  
  public function __construct($value)
  {
    if (!is_string($value)) {
      throw new \InvalidArgumentException(sprintf('The value for %s is invallid', get_class($this)));
    }

    $this->value = $value;
  }

  

}