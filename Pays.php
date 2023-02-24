<?php

class Pays{
    
    private string $_nom;
    private Joueur $_joueur;
    private Equipe $_equipe;

    public function __construct(string $_nom , Joueur $_joueur , Equipe $_equipe)
    {
        $this->_nom = $_nom;
        $this->_joueur = $_joueur;
        $this->_equipe = $_equipe;
        
    }
}