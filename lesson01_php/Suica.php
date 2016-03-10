<?php
/* Suicaクラス */
class Suica {

  public $balance = 0;

  public function __construct($balance) {
    $this->balance = $balance;
  }

  public function getBalance() {
    return $this->balance;
  }

  public function setBalance($price) {
    return $this->balance = $price;
  }
}
?>
