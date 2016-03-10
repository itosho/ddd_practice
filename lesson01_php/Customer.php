<?php

/* Customer */
class Customer {

  public $vendingMachine;
  public $suica;
  public $suicaReader;

  public function __construct($balance) {
    $this->vendingMachine = new VendingMachine();
    $this->suica = new Suica($balance);
    $this->suicaReader = new SuicaReader();
  }

  public function pushDrinkButton($drinkName) {
    if ($this->vendingMachine->setDrinkButton($drinkName)) {
      echo "飲み物「" . $drinkName . "」が選択されました。\n";
    } else {
      echo "飲み物「" . $drinkName . "」は売り切れています。\n";
      exit;
    }
  }

  public function touchSuicaReader() {
    $balance = $this->suica->getBalance();
    if (!$this->suicaReader->passBalance($this->vendingMachine, $balance)) {
      echo "残高が足りません。\n";
      exit;
    }

    $this->suica->setBalance($this->vendingMachine->calcPrice($balance));

    echo "Suicaの残高が" . $this->suica->getBalance() . "円に更新されました。\n";

    $this->vendingMachine->setDrinkOutlet();
  }

  public function getDrinkOutlet() {
    echo "飲み物「" . $this->vendingMachine->drinkOutlet . "」を受け取りました。\n";
    $this->vendingMachine->drinkOutlet = "";
  }
}

?>
