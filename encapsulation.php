<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;
  public $weight;

  function set_name($n) { //fonction publique
    $this->name = $n;
  }

}

$mango = new Fruit();
$mango->set_name('Mango'); // OK
?>