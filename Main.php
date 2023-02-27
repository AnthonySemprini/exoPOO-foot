<?php

spl_autoload_register(function($class_name){    //lie les pages ensemble dans le bonne oredre
    require $class_name . ".php";
});

$Pays1 = new Pays ("France");
$Pays2 = new Pays ("Angleterre");
$Pays3 = new Pays ("Italie");
$Pays4 = new Pays ("Belgique");
$Pays5 = new Pays ("Uruguay");
$Pays6 = new Pays ("Espagne");

$Equipe1 = new Equipe ("RCSA",$Pays1,1906);
$Equipe2 = new Equipe ("PSG",$Pays1,1980);
$Equipe3 = new Equipe ("Real Madrid",$Pays6,1918);
$Equipe4 = new Equipe ("Manchester United",$Pays2,1900);


$Joueur1 = new Joueur ("Dimitri","Lienard","1988-02-13",$Pays1);
$Joueur2 = new Joueur ("Matt","Seltz","1990-04-23",$Pays4);
$Joueur3 = new Joueur ("Kilian","Mbappe","2001-06-15",$Pays1);
$Joueur4 = new Joueur ("Edisson","Cavani","1995-04-30",$Pays5);
$Joueur5 = new Joueur ("Karim","Benzema","1990-11-28",$Pays1);
$Joueur6 = new Joueur ("Marco","Verati","1990-04-01",$Pays3);

$Carriere1 = new Carriere($Joueur1,$Equipe1,2018);
$Carriere2 = new Carriere($Joueur2,$Equipe1,2019);
$Carriere2 = new Carriere($Joueur3,$Equipe2,2017);
$Carriere2 = new Carriere($Joueur4,$Equipe2,2014);
$Carriere2 = new Carriere($Joueur4,$Equipe4,2022);
$Carriere2 = new Carriere($Joueur5,$Equipe3,2010);
$Carriere2 = new Carriere($Joueur6,$Equipe2,2010);
$Carriere2 = new Carriere($Joueur3,$Equipe3,2023);
// $Carriere2 = new Carriere()


$Joueur3->getInfosJoueur();
// echo $Equipe1->getInfos();
$Pays1->getInfosPays();
// echo $Joueur3->afficherCarriere();
$Equipe1->getInfosEquipe();
// var_dump($Pays1);