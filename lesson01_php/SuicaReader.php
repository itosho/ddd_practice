<?php

/* SuicaReader */
class SuicaReader {

  public function passBalance($vendingMachine, $balance) {
    return $vendingMachine->isEnough($balance);
  }
}

?>
