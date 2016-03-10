<?php

/* VendingMachineクラス */
class VendingMachine {

  public $drinkButton = ""; // 何も選択されていない
  public $drinkOutlet = ""; // 何も落ちていない
  public $price = 100;

  public function calcPrice($balance) {
    return $balance - $this->price;
  }

  public function isEnough($balance) {
    return ($balance >= $this->price) ? true : false;
  }

  public function setDrinkButton($drinkName) {
    // $drink = new Drink();
    if (class_exists($drinkName)) {
      $drinkNameClass = new $drinkName();
      $this->drinkButton = $drinkNameClass->getDrinkName();
      return true;
    } else {
      return false;
    }
  }

  public function setDrinkOutlet() {
    $this->drinkOutlet = $this->drinkButton;
    $this->drinkButton = "";
  }
}

?>
