<?php

class Pays{
    //attributs
    private string $_nomPays;
    private array $_equipes;


    //construct

    public function __construct(string $_nomPays )
    {
        $this->_nomPays = $_nomPays;
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

  
    public function ajouterEquipe(Equipe $equipe){
        $this->_equipes[] = $equipe;
    }
    // public function afficherequipe(){
    //     foreach($this->_equipes as $equipe){
    //         echo $equipe->get_Joueur().$equipe->get_equipe."<br>";
    //     }
    // }
    
    public function getInfosPays(){

        $result = "<br>" . $this->_nomPays."<br><br>";
        foreach($this->_equipes as $equipe){
            $result .= $equipe."<br>";
          
        }
        return $result;
    }
        

    public function __toString()
    {
        return $this->_nomPays;
    }

    

}