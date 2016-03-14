<?php

require_once('DrinkName.php');

/* Entity */
class Drink {

  public $drinkName;

  public function __construct(DrinkName $drinkName) {
    $this->drinkName = $drinkName;
  }

  public function getDrinkName() {
    return $this->drinkName;
  }
}

/* Entity */
class Cola extends Drink {
  public function __construct() {
    parent::__construct(new DrinkName("コーラ"));
  }
}

/* Entity */
class Fanta extends Drink {
  public function __construct() {
    parent::__construct(new DrinkName("ファンタ"));
  }
}

/* Entity */
class Soda extends Drink {
  public function __construct() {
    parent::__construct(new DrinkName("ソーダ"));
  }
}

/* Entity */
class Pocari extends Drink {
  public function __construct() {
    parent::__construct(new DrinkName("ポカリ"));
  }
}

?>
