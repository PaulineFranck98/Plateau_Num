<?php
// création classe Personne (nom,prénom et date naissance)

class Personne {

    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;

    public function __construct(string $nom, string $prenom, string $dateNaissance){
        $this->_nom = $nom ;
        $this->_prenom = $prenom ;
        $this->_dateNaissance = new DateTime ($dateNaissance);
    }

    // getter
    public function getNom(){
        return $this->_nom;
    }

    public function getPrenom(){
        return $this->_prenom;

    }

    public function getDateNaissance(){
        return $this->_dateNaissance;
    }

    // setter

    public function setNom($nom){
        $this->_nom = $nom;
    }
    
    public function setPrenom($prenom){
        $this->_prenom = $prenom;

    }
    public function setDateNaissance($dateNaissance){
        $this->_dateNaissance = $dateNaissance;
    }


    public function calculAge (){

        $dateDuJour = new DateTime('now');
        return $this->_dateNaissance->diff($dateDuJour);
           
    }

    // 
    public function __toString(){
        return $this->_nom." ".$this->_prenom." a ".$this->calculAge()->format('%y')." ans.";
    }

}



$p1 = new Personne ("DUPONT","Michel", "1980-02-19");
$p2 = new Personne ("DUCHEMIN", "Alice", "1985-01-17");

echo $p1."<br>";
echo $p2;

// echo $p1->getPrenom(); 
// $p1->setNom("MICHEL");
// echo $p1->getNom();

?>

<h1>Bienvenue sur mon site <?= $p1->getNom()." ".$p1->getPrenom() ?></h1>

