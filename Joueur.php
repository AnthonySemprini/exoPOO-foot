<?php

class Joueur{
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    private Pays $_pays;

    public function __construct(string $_nom , string $_prenom ,  DateTime $_dateNaissance , Pays $_pays){

        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
        $this->_dateNaissance = new DateTime ($_dateNaissance);
        $this->_pays = $_pays;
        
    }
}