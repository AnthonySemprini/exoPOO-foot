<?php

class Carriere{
    private Joueur $_joueur;
    private Equipe $_equipe;
    private int $_date;

    public function __construct(Joueur $_joueur , Equipe $_equipe , int $_date)
    {
    $this->_joueur = $_joueur;
    $this->_equipe = $_equipe;
    $this->_date = $_date;
    
        
    }
}