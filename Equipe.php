<?php

class Equipe{

    private Joueur $_joueur;
    private Pays $_pays;

    public function __construct(Joueur $_joueur , Pays $_pays)
    {
      $this->_joueur = $_joueur;
      $this->_pays = $_pays;  
    }
}