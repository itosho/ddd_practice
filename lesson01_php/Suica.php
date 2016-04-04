<?php
/* Entity */
class Suica {

  public $suicaId;
  public $balance;

  public function __construct($suicaId, $balance) {
    $this->suicaId = $suicaId;
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
