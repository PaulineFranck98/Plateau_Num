<?php


class Voiture {

    private string $marque;
    private string $modele;
    private int $nbPortes;
    private int $vitesseActuelle;

    public function __construct(string $marque, string $modele, int $nbPortes){

        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = 0;
    }

    public function demarrer(){

        
        if( $this->vitesseActuelle > 0){

            echo "Le véhicule " . $this->marque . " " . $this->modele . " démarre <br><br>";
            
        }else {
            
            echo "Le véhicule " . $this->marque . " " .  $this->modele . " est à l'arrêt <br><br>";
            
        }

    }

    public function accelerer($acceleration){

        if( $this->vitesseActuelle > 0){

            $this->vitesseActuelle += $acceleration;

            echo "Le véhicule " . $this->marque . " " .  $this->modele . " accélère de " . $acceleration . " km/h <br><br>";

        } else {
            
            echo "Pour accélérer, il faut démarrer le véhicule " . $this->marque . " " . $this->modele . " ! <br><br>";

        }

            echo "La vitesse du véhicule " . $this->marque . " " . $this->modele . " est de " . $this->vitesseActuelle . " km/h <br><br>";
        

    }

    public function stopper(){
        
        if( $this->vitesseActuelle == 0){

            echo "Le véhicule " . $this->marque . " " . $this->modele . " est stoppé<br><br>";
            
        }else {
            
            echo "Le véhicule " . $this->marque . " " .  $this->modele . " est démarré<br><br>";
            
        }


    }
    public function ralentir($vitesse){

        if ($this->vitesseActuelle > 0) {

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

    public function infosVehicule(){

        $statut = ($this->vitesseActuelle > 0) ? "est démarré" : "est à l'arrêt";
        
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

$peugeot->setVitesseActuelle(5);

$peugeot->demarrer();

$peugeot->stopper();

$peugeot->ralentir(5);



$citroen = new Voiture("Citroën","C4",3);

$citroen->setVitesseActuelle(0);

$citroen->demarrer();

$citroen->stopper();

$citroen->accelerer(50);


echo $peugeot->infosVehicule() . "<br><br>";

echo $citroen->infosVehicule();




// var_dump($peugeot);

// var_dump($citroen);
