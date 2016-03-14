<?php

/* Value Obeject */
class DrinkName {

  public $value;

  public function __construct($value) {
    $this->value = $value;
  }

  public function getValue() {
    return $this->value;
  }
}

?>
