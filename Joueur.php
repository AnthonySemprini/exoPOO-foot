<?php

class Joueur{
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    private Pays $_pays;
    private array $_carrieres;

    public function __construct(string $_nom , string $_prenom , $_dateNaissance , Pays $_pays){

        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_dateNaissance = new DateTime ($_dateNaissance);
        $this->_pays = $_pays;
        $this->_carrieres = [];
        
    }
 

    //function
    public function ageReel() { 
        $currentDate= new DateTime();
        $result = $this->_dateNaissance->diff($currentDate);
        return $result->format ('%Y ans');
    }
}