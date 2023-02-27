<?php

class Equipe{
    //attributs
    private string $_nomEquipe;
    private Pays $_pays;
    private  $_dateCreation;
    private array $_carrieres;//historique de l'equipe : joueur ...) 

    public function __construct(string $_nomEquipe , Pays $_pays , $_dateCreation )
    {
      $this->_nomEquipe = $_nomEquipe;
      $this->_pays = $_pays;  
      $this->_dateCreation = $_dateCreation;
      $this->_carrieres = [];
      $this->_pays->ajouterEquipe($this);
    }

       //   getter

       public function get_nomEquipe(){
        return  $this->_nomEquipe;  
    } 
    public function get_pays(){
        return  $this->_pays;  
    } 
    public function get_date(){
        return  $this->_dateCreation;  
    } 

        //  setter

    public function set_nomEquipe(){
        $this->_nomEquipe;
    }
    public function set_pays(){
        $this->_pays;
    }
    public function set_date(){
        $this->_dateCreation;
    }


    //function

    public function ajouterCarriere(Carriere $carriere){
        $this->_carrieres[] = $carriere;
    }
    

    public function getInfosEquipe()
    {
        echo "<br><br>".$this." - " . $this->_pays."<br>".$this->_dateCreation."<br><br>";
        foreach($this->_carrieres as $carriere)
        {
            echo $carriere->get_joueur().$carriere."<br>";
        }
    }

    public function __toString()
    {
        return $this->_nomEquipe;
    }
}