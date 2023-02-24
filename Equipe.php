<?php

class Equipe{
    //attributs
    private string $_nomEquipe;
    private Pays $_pays;
    private DateTime $_dateCreation;
    private array $_carrieres;//historique de l'equipe : joueur ...) 

    public function __construct(string $_nomEquipe , Pays $_pays , $_dateCreation )
    {
      $this->_nomEquipe = $_nomEquipe;
      $this->_pays = $_pays;  
      $this->_dateCreation = new DateTime($_dateCreation);
      $this->_carrieres = [];
    }
}