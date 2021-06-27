<?php
   $a=10;
   $b=0;
   try{
      if($b==0)
         throw new Exception("Le dénominateur ne doit pas être nul.","553");
      $c=$a/$b;
      echo $c;
   }
   catch(Exception $e){
      //recuperation du fichier d'erreur
      $erreur="<b>Document: <b>".$e->getFile()."</b><br />";
      // la ligne d'erreur
      $erreur.="Line: <b>".$e->getLine()."</b><br />";
      //Le code d'erreur
      $erreur.="Code d'erreur: <b>".$e->getCode()."</b><br />";
      //Le message d'erreur defini dans l'exception
      $erreur.="Message d'erreur: <b>".$e->getMessage()."</b><br />";
      echo $erreur;
   }
?>