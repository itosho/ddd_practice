<?php
/* Value Object */
class Price {

  public value;

  public function __construct($value) {
    $this->value = $value;
  }

  public function getValue() {
    return $this->value;
  }
}
?>
