<?php

class Voiture {
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;

    public function __construct(string $marque, string $modele, int $nbPortes){

        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = 0;
    }

    public function demarrer(){

    }

    public function accelerer(){

    }

    public function stopper(){

    }

    // getter 

    public function getMarque(){
        return $this->_marque;
    }

    public function getModele(){
        return $this->_modele;

    }

    public function getNbPortes(){
        return $this->_nbPortes;

    }

    public function getVitesseActuelle(){
        return $this->_vitesseActuelle;
    }


    // setter setter

    public function setMarque($marque){
        $this->_marque = $marque;
    }
    
    public function setModele($modele){
        $this->_modele = $modele;

    }
    public function setNbPortes($NbPortes){
        $this->_NbPortes = $NbPortes;
    }
    
    public function setVitesseActuelle($vitesseActuelle){
        $this->_vitesseActuelle = $vitesseActuelle;
    }


}