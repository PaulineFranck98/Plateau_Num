<?php

// création de ma classe qui englobe des attributs et des méthodes
class Voiture {

    // private : uniquement accessible depuis la classe où il est déclaré
    private string $marque;
    private string $modele;
    private int $nbPortes;
    private int $vitesseActuelle = 0;
    private bool $estDemarre = false;

    // le constructeur permet de construire la classe (on précise le type : string, int, bool, etc)
    public function __construct(string $marque, string $modele, int $nbPortes){

        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        
    }

    public function demarrer(){

        
         $this->estDemarre = true;
            
        echo "Le véhicule " . $this->marque . " " . $this->modele . " démarre <br><br>";
            
            
        

    }

    public function accelerer($acceleration){

        // if ($this->estDemarre == true){
        if ($this->estDemarre){

            $this->vitesseActuelle += $acceleration;

            echo "Le véhicule " . $this->marque . " " .  $this->modele . " accélère de " . $acceleration . " km/h <br><br>";

        } else {
            echo "Le véhicule " . $this->marque . " " . $this->modele . " veut accélérer de " . $acceleration . "km/h <br><br>";
            echo "Pour accélérer, il faut démarrer le véhicule " . $this->marque . " " . $this->modele . " ! <br><br>";

        }

        echo "La vitesse du véhicule " . $this->marque . " " . $this->modele . " est de " . $this->vitesseActuelle . " km/h <br><br>";
        

    }

    public function stopper(){
        
        $this->estDemarre = false;

        echo "Le véhicule " . $this->marque . " " . $this->modele . " est stoppé<br><br>";
            


    }


    public function ralentir($vitesse){

        if ($this->estDemarre = true) {

            $this->vitesseActuelle -= $vitesse;

            if ($this->vitesseActuelle < 0) {

                $this->vitesseActuelle = 0;
            }
            
            echo "Le véhicule " . $this->marque . " " . $this->modele . " ralentit de " . $vitesse . " km/h<br><br>";

        } else {

            echo "Le véhicule " . $this->marque . " " .  $this->modele . " est déjà à l'arrêt<br><br>";

        }

        echo " La vitesse actuelle du véhicule " . $this->marque . " " . $this->modele . " est de " . $this->vitesseActuelle . " km/h<br><br>";
    }
    // getter 

    public function getMarque(){
        return $this->marque;
    }

    public function getModele(){
        return $this->modele;

    }

    public function getNbPortes(){
        return $this->nbPortes;

    }

    public function getVitesseActuelle(){
        return $this->vitesseActuelle;
    }

    public function getEstDemarre(){
        return $this->estDemarre;

    }

    public function setEstDemarre($estDemarre){
        $this->estDemarre = $estDemarre;
    }


    public function infosVehicule(){
        
        $statut = ($this->estDemarre) ? "est démarré" : "est à l'arrêt";

        return "Infos véhicule : <br/>" .
            "Nom et modèle du véhicule : " . $this->marque . " " . $this->modele . "<br/>" .
            "Nombre de portes : " . $this->nbPortes . "<br/>" .
            "Le véhicule " . $this->marque . " " . $this->modele . " " . $statut . "<br/>" .
            "Sa vitesse actuelle est de : " . $this->vitesseActuelle . " km/h";
    }
   

    public function setMarque($marque){
        $this->marque = $marque;
    }
    
    public function setModele($modele){
        $this->modele = $modele;

    }
    public function setNbPortes($NbPortes){
        $this->NbPortes = $NbPortes;
    }
    
    public function setVitesseActuelle($vitesseActuelle){
        $this->vitesseActuelle = $vitesseActuelle;
    }


}


$peugeot = new Voiture("Peugeot","408",5);

$peugeot->demarrer();

$peugeot->accelerer(50);

$peugeot->ralentir(5);



$citroen = new Voiture("Citroën","C4",3);

$citroen->demarrer();

$citroen->stopper();

$citroen->accelerer(20);


echo $peugeot->infosVehicule() . "<br><br>";

echo $citroen->infosVehicule();

echo $peugeot;


// var_dump($peugeot);

// var_dump($citroen);
