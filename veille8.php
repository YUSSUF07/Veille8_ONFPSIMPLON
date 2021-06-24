<?php
class apprenant{
    private $objet1 = "competences";
    private $objet3 = "travail";
    private $objet2 = "connaissance";

    public function yobale(){
        if (isset($objet1)){
            echo '$objet1 primordiale';
        }else{echo "cest pas la peine de continuer";}
    }
}