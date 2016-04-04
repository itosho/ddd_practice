<?php
/* Value Object */
class Balance {

  public value;

  public function __construct($value) {
    $this->value = $value;
  }

  public function getValue() {
    return $this->value;
  }
}
?>
