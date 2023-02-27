<?php

class Joueur{
    //attributs
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    private Pays $_pays;
    private array $_carrieres;


            // construct

    public function __construct(string $_nom , string $_prenom , $_dateNaissance ,Pays $_pays ){

        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_dateNaissance = new DateTime ($_dateNaissance);
        $this->_pays = $_pays;
        $this->_carrieres = [];
        
    }

    //getter

    public function get_nom(){
        return  $this->_nom;  
    } 
    public function get_prenom(){
        return  $this->_prenom;  
    } 
    public function get_age(){
        return  $this->_dateNaissance;  
    }
    public function get_pays(){
        return  $this->_pays;  
    } 

    //setter

    public function set_nom(){
        $this->_nom;
    }
    public function set_prenom(){
        $this->_prenom;
    }
    public function set_dateNaissance($newDateNaissance){
        $this->_dateNaissance = $newDateNaissance;
    }
    public function set_pays(){
        $this->_pays;
    }
 

    //function
    public function ageReel() { 
        $currentDate= new DateTime();
        $result = $this->_dateNaissance->diff($currentDate);
        return $result->format ('%Y ans ');
    }

    public function ajouterCarriere(Carriere $carriere){
        $this->_carrieres[] = $carriere;
    }
    
    
    public function getInfosJoueur(){
        echo 
        $this ."<br>". $this->_pays ." - ". $this -> ageReel()."<br><br>";
        foreach ($this->_carrieres as $carriere){
           echo $carriere->get_equipe()." ".$carriere."<br>";
        }
        
    }
    
    public function __toString()
     {
         return $this->_prenom." ".$this->_nom." ";
     }
}


// $Joueur1 = new Joueur ("Dimitri","Lienard","1988-02-13",$Pays1);

// echo $Joueur1->getInfos();