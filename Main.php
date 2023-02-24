<?php

spl_autoload_register(function($class_name){    //lie les pages ensemble dans le bonne oredre
    require $class_name . ".php";
});


$Joueur1 = new Joueur ("Dimitri","Lienard","1988-02-13","France");
$Joueur2 = new Joueur ("Matt","Seltz","1990-04-23","Belgique");
$Joueur3 = new Joueur ("Kilian","Mbappe","2001-06-15","France");
$Joueur4 = new Joueur ("Edisson","Cavani","1995-04-30","Uruguay");
$Joueur5 = new Joueur ("Karim","Benzema","1990-11-28","France");
$Joueur6 = new Joueur ("Marco","Verati","1990-04-01","Italie");

$Equipe1 = new Equipe ("RCSA","France","1906");
$Equipe2 = new Equipe ("PSG","France","1980");
$Equipe3 = new Equipe ("Real Madrid","Espagne","1918");
$Equipe4 = new Equipe ("Manchester United","Angleterre","1900");

$Pays1 = new Pays ("France");
$pays2 = new Pays ("Angleterre");
$pays3 = new Pays ("Italie");
$pays4 = new Pays ("Belgique");

$cariere1 = new Carriere($joueur1,$Equipe1,"2018");
$cariere2 = new Carriere($Joueur2,$Equipe1,"2019");
$cariere2 = new Carriere($Joueur3,$Equipe2,"2017");
$cariere2 = new Carriere($Joueur4,$Equipe2,"2014");
$cariere2 = new Carriere($Joueur4,$Equipe4,"2022");
$cariere2 = new Carriere($Joueur5,$Equipe3,"2010");
$cariere2 = new Carriere($Joueur6,$Equipe2,"2010");
$cariere2 = new Carriere($Joueur3,$Equipe3?"2023");
// $cariere2 = new Carriere()
