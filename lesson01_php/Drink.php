<?php

require_once('DrinkName.php');

/* Value Obeject */
class Drink {

  public $drinkName;

  public function __construct(DrinkName $drinkName) {
    $this->drinkName = $drinkName;
  }

  public function getDrinkName() {
    return $this->drinkName;
  }
}

/* Value Obeject */
class Cola extends Drink {
  public function __construct() {
    parent::__construct(new DrinkName("コーラ"));
  }
}

/* Value Obeject */
class Fanta extends Drink {
  public function __construct() {
    parent::__construct(new DrinkName("ファンタ"));
  }
}

/* Value Obeject */
class Soda extends Drink {
  public function __construct() {
    parent::__construct(new DrinkName("ソーダ"));
  }
}

/* Value Obeject */
class Pocari extends Drink {
  public function __construct() {
    parent::__construct(new DrinkName("ポカリ"));
  }
}

?>
