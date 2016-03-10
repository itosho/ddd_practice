<?php

require_once('Suica.php');
require_once('SuicaReader.php');
require_once('VendingMachine.php');
require_once('Drink.php');
require_once('Customer.php');

$argBalance = $argv[1];
$argDrinkName = $argv[2];

echo "Suicaの残高" . $argBalance . "円で" . $argDrinkName . "を買います\n\n\n";

$customer = new Customer($argBalance);

$customer->pushDrinkButton($argDrinkName);

$customer->touchSuicaReader();

$customer->getDrinkOutlet();
?>
