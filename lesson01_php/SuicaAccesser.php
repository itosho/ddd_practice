<?php

require_once('Suica.php');
require_once('Balance.php');

/* Service? */
class SuicaAccesser {

  public function readBalence(Suica $suica) {
    return $suica->getBalance();
  }

  public function writeBalance(Suica $suica, Balance $balance) {
    return $suica->setBalance($balance);
  }
}

?>
