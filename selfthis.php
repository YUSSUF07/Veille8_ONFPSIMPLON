<?php 
class MaClasse
{
  public $var;
  public static $svar;
  public function rfunction()
  {
    echo $this->var; 
  }
  public static function sfunction()
  { 
    echo self::$svar; 
  }
}
MaClasse::$svar = "Hello World!";
$obj = new MaClasse();
$obj->var = "Welcome";
echo MaClasse::sfunction();
echo $obj->rfunction();