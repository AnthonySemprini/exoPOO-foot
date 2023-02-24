<?php

class Pays{
    //attributs
    private string $_nomPays;
    private array $_joueurs;
    private array $_equipes;


    //construct

    public function __construct(string $_nomPays )
    {
        $this->_nomPays = $_nomPays;
        $this->_joueurs = [];
        $this->_equipes = [];
        
    }

    // getter setter

    public function get_nomPays(){
        return  $this->_nomPays;  
    } 
    public function set_nomPays(){
        return  $this->_nomPays;  
    } 
   

    //function

    public function ajouterjoueur(Joueur $joueur){
        $this->_joueurs[] = $joueur;
    }
    public function afficherjoueur(){
        foreach($this->_joueurs as $joueur){
            echo $joueur->get_player().$joueur->get_equipe."<br>";
        }
    }

    public function ajouterequipe(Equipe $equipe){
        $this->_equipes[] = $equipe;
    }
    public function afficherequipe(){
        foreach($this->_equipes as $equipe){
            echo $equipe->get_player().$equipe->get_equipe."<br>";
        }
    }
    
    public function __toString()
    {
        return $this->_nomPays;
    }

    
    

}