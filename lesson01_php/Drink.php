<?php

/* Drinkクラス */
class Drink {

  public $drinkName;

  public function getDrinkName() {
    return $this->drinkName;
  }
}

/* Colaクラス */
class Cola extends Drink {
  public $drinkName = "Cola";
}

/* Fantaクラス */
class Fanta extends Drink {
  public $drinkName = "Fanta";
}

/* Fantaクラス */
class Soda extends Drink {
  public $drinkName = "Soda";
}

/* Pocariクラス */
class Pocari extends Drink {
  public $drinkName = "Pocari";
}

?>
