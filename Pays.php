<?php

class Pays{
    
    private string $_nom;
    private array $_joueur;
    private array $_equipe;

    public function __construct(string $_nom )
    {
        $this->_nom = $_nom;
        $this->_joueur = [];
        $this->_equipe = [];
        
    }

    public function get_nom(){
        return  $this->_nom;  
    } 
    public function get_joueur(){
        return  $this->_joueur;  
    } 
    public function get_equipe(){
        return  $this->_equipe;  
    } 


    public function set_nom(){
        return  $this->_nom;  
    } 
    public function set_joueur(){
        return  $this->_joueur;  
    } 
    public function set_equipe(){
        return  $this->_equipe;  
    } 
    
   

    
    

}