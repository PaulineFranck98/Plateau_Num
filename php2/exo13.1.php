<?php

// création de ma classe qui englobe des attributs et des méthodes
class Voiture {

    // private : uniquement accessible depuis la classe où il est déclaré
    // propriétés de la classe (attributs) -------------------------------------------------------------------------------------------
    private string $marque;
    private string $modele;
    private int $nbPortes;
    private int $vitesseActuelle = 0;
    private bool $estDemarre = false;

    // le constructeur permet de construire la classe (on précise le type : string, int, bool, etc) ----------------------------------
    public function __construct(string $marque, string $modele, int $nbPortes){

        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        
    }

    // méthodes pour modifier l'état de la voiture ------------------------------------------------------------------------------------

    // met à jour l'état de mon véhicule pour le passer en démarré
    public function demarrer(){

        // $this fait référence à l'instance actuelle dela classe Voiture
        // estDemarre est une propriété (variable) de l'objet Voiture
         $this->estDemarre = true;
        //  =true; affecte la valeur "true" à la propriété estDemarre indiquant que le véhicule est maintenant démarré
        echo "Le véhicule " . $this->marque . " " . $this->modele . " démarre <br><br>";
            
            
        

    }

    // permet d'augmenter la vitesse du véhicule (si démarré) en ajoutant une accélération (placée en paramètre)
    public function accelerer($acceleration){
        
        // vérifie si le véhicule est démarré (true)
        if ($this->estDemarre){
            //si true, on ajoute la valeur de l'accélération à la vitesse actuelle du véhicule
            $this->vitesseActuelle += $acceleration;
            
            echo "Le véhicule " . $this->marque . " " .  $this->modele . " accélère de " . $acceleration . " km/h <br><br>";
            
            //sinon, si le véhicule n'est pas démarré, affiche :  
        } else {
            
            echo "Le véhicule " . $this->marque . " " . $this->modele . " veut accélérer de " . $acceleration . "km/h <br><br>";
            echo "Pour accélérer, il faut démarrer le véhicule " . $this->marque . " " . $this->modele . " ! <br><br>";
            
        }
        
        // affiche la vitesse du véhicule qu'il accélère ou non
        echo "La vitesse du véhicule " . $this->marque . " " . $this->modele . " est de " . $this->vitesseActuelle . " km/h <br><br>";
        
        
    }
    
    // met à jour l'état de mon véhicule pour le passer en stoppé
    public function stopper(){
        
        // =false; affecte la valeur "false" à la propriété estDemarre indiquant que le véhicule est maintenant stoppé
        $this->estDemarre = false;
        
        echo "Le véhicule " . $this->marque . " " . $this->modele . " est stoppé<br><br>";
        
        
        
    }
    
    
    // permet de réduire la vitesse du véhicule (si démarré) en déduisant de la vitesse (placée en paramètre)
    public function ralentir($vitesse){
        
        // vérifie si le véhicule est démarré (true)
        if ($this->estDemarre = true) {
            
            //si true, on déduit la valeur de la vitesse à la vitesse actuelle du véhicule
            $this->vitesseActuelle -= $vitesse;
            
            // permet de remettre la valeur de la vitesse à 0 si est <0 pour qu'elle ne puisse pas être négative
            if ($this->vitesseActuelle < 0) {

                $this->vitesseActuelle = 0;
            }
            
            echo "Le véhicule " . $this->marque . " " . $this->modele . " ralentit de " . $vitesse . " km/h<br><br>";
        
        // sinon, si false, donc le véhicule n'est pas démarré ou est stoppé, alors on affiche :
        } else {

            echo "Le véhicule " . $this->marque . " " .  $this->modele . " est déjà à l'arrêt<br><br>";

        }

        echo " La vitesse actuelle du véhicule " . $this->marque . " " . $this->modele . " est de " . $this->vitesseActuelle . " km/h<br><br>";
    }


    //méthodes GETTERS pour récupérer les valeurs des différentes propriétés-------------------------------------------------------------------------

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

    // méthodes SETTERS pour modifier les valeurs des différentes propriétés ---------------------------------------------------------------------------

    public function setEstDemarre($estDemarre){
        $this->estDemarre = $estDemarre;
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
    
    // méthode pour afficher les informations du véhicule ----------------------------------------------------------------------------------------------

    public function infosVehicule(){
        
        $statut = ($this->estDemarre) ? "est démarré" : "est à l'arrêt";

        return "Infos véhicule : <br/>" .
            "Nom et modèle du véhicule : " . $this->marque . " " . $this->modele . "<br/>" .
            "Nombre de portes : " . $this->nbPortes . "<br/>" .
            "Le véhicule " . $this->marque . " " . $this->modele . " " . $statut . "<br/>" .
            "Sa vitesse actuelle est de : " . $this->vitesseActuelle . " km/h";
    }
    
    public function __toString(){

        return "Informations sur la voiture : " . $this->marque . " " . $this->modele;

    }

}

// création d'objets "Voiture" (instances de la classe "Voiture")---------------------------------------------------------------------------------------

$peugeot = new Voiture("Peugeot","408",5);

$citroen = new Voiture("Citroën","C4",3);


// utilisation des méthodes définies dans la classe "Voiture" : les méthodes sont appelées sur les objets $peugeot et $citroen--------------------------

$peugeot->demarrer();

$peugeot->accelerer(50);

$peugeot->ralentir(5);

$citroen->demarrer();

$citroen->stopper();

$citroen->accelerer(20);


// echo $peugeot utilise la méthode magique "__toString()" pour afficher les informations de $peugeot qui est un objet ------------------------------------

echo $peugeot->infosVehicule() . "<br><br>";

echo $citroen->infosVehicule();


echo $peugeot;


// var_dump($peugeot);

// var_dump($citroen);


// Méthode magique __toString ------------------------------------------------------------------------------
// __toString est une méthode magique spéciale qui permet à un objet de définir comment il doit être 
// converti en chaîne de caractères lorsqu'il est utilisé dans un contexte où unechaîne de caractères
// est attendue, comme avec echo

//  sans la méthode __toString, si j'avais créé mon objet $peugeot de la classe Voiture
//  si je souhaite afficher directement avec echo  : echo $peugeot, php ne sait pas comment convertir cet objet
// en une chaîne de caractère pour l'affichage --> provoque une erreur

// on définit la méthode _toString dans la classe Voiture pour spécifier comment l'objet doit être représenté
// sous forme de chaîne de caractères 
// dans class Voiture {} on définit : public function __toString()
// désormais,lorsqu'on utilise echo $peugeot, php détecte la présence de la méthode dans la classe "Voiture"
// et appelle automatiquement cette méthode pour convertir l'objet $peugeot en une chaîne de caractères,
// en utilisant le contenu retourné par la méthode __toString() pour l'affichage.