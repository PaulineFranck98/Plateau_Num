<?php

class Voiture {

    protected string $marque;
    protected string $modele;


    public function __construct(string $marque, string $modele){

        $this->marque = $marque;
        $this->modele = $modele;

    }

    public function getMarque(){

        return $this->marque;

    }

    public function getModele(){

        return $this->modele;

    }

    public function setMarque($marque){

        $this->marque = $marque;

    }
    
    public function setModele($modele){

        $this->modele = $modele;

    }

    public function getInfos(){

        return "Infos véhicule : <br>" .
        "Marque du véhicule : " . $this->marque . "<br>" .
        "Modèle du véhicule : " . $this->modele . "<br>" ;
    }
    
}


class VoitureElec extends Voiture {
    
    private int $autonomie;
    
    public function __construct($marque, $modele, $autonomie){
        
        // oblige la classe VoitureElec à respecter  les paramètres du constructeur de sa classe mère
        parent::__construct($marque , $modele);
        
        $this->autonomie = $autonomie;
        
    }
    
    public function getAutonomie(){
        return $this->autonomie;
    }
    
    public function setAutonomie($autonomie){
        $this->autonomie = $autonomie;
    }
    
    public function getInfos(){
        
        // concaténation juste après la fonction 
         return parent::getInfos() . "Autonomie : " . $this->autonomie . "<br>";
         
        // autre option :  
        // "Infos véhicule : <br>" .
        // "Marque du véhicule : " . $this->marque . "<br>" .
        // "Modèle du véhicule : " . $this->modele . "<br>" .
    }
    
}



$v1 = new Voiture ("Peugeot", "408");
echo $v1->getInfos() . "<br>";

$ve1 = new VoitureElec ("BMW", "I3", 100);
echo $ve1->getInfos();

// var_dump($v1);
// var_dump($ve1);
