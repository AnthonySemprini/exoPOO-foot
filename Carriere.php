<?php

class Carriere{
    private Joueur $_joueur;
    private Equipe $_equipe;
    private $_date;

    public function __construct( Joueur $_joueur , Equipe $_equipe ,  $_date)
    {
    $this->_joueur = $_joueur;
    $this->_equipe = $_equipe;
    $this->_date = $_date;
    $this->_joueur->ajouterCarriere($this);
    $this->_equipe->ajouterCarriere($this);
    
        
    }
        //   getter

    public function get_joueur(){
        return  $this->_joueur;  
    } 
    public function get_equipe(){
        return  $this->_equipe;  
    } 
    public function get_date(){
        return  $this->_date;  
    } 

        //  setter

    public function set_joueur(){
        $this->_joueur;
    }
    public function set_equipe(){
        $this->_equipe;
    }
    public function set_date(){
        $this->_date;
    }


    public function __toString()
    {
        return $this->_date;
    }
    
}