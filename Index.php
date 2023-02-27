<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>exo foot POO</title>
</head>
<body>

<?php

spl_autoload_register(function($class_name){    
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
$Equipe5 = new Equipe ("RSC Anderlecht",$Pays4,1917);
$Equipe6 = new Equipe ("OL",$Pays1,1932);
$Equipe7 = new Equipe ("Pescara",$Pays3,1938);
$Equipe8 = new Equipe("FC Mulhouse",$Pays1,1954);
$Equipe9 = new Equipe("Chelsea",$Pays2,1898);
$Equipe10 = new Equipe("Juventus",$Pays3,1932);
$Equipe11 = new Equipe("FC Gantoise",$Pays4,1954);
$Equipe12 = new Equipe("FC Barcelone",$Pays6,1912);


$Joueur1 = new Joueur ("Dimitri","Lienard","1988-02-13",$Pays1);
$Joueur2 = new Joueur ("Matt","Sels","1992-04-23",$Pays4);
$Joueur3 = new Joueur ("Kilian","Mbappe","2001-06-15",$Pays1);
$Joueur4 = new Joueur ("Edisson","Cavani","1995-04-30",$Pays5);
$Joueur5 = new Joueur ("Karim","Benzema","1990-11-28",$Pays1);
$Joueur6 = new Joueur ("Marco","Verati","1990-04-01",$Pays3);

$Carriere1 = new Carriere($Joueur1,$Equipe8,2012);
$Carriere2 = new Carriere($Joueur1,$Equipe1,2018);
$Carriere3 = new Carriere($Joueur2,$Equipe5,2017);
$Carriere4 = new Carriere($Joueur2,$Equipe1,2018);
$Carriere5 = new Carriere($Joueur3,$Equipe2,2017);
$Carriere6 = new Carriere($Joueur3,$Equipe3,2023);
$Carriere7 = new Carriere($Joueur3,$Equipe1,2025);
$Carriere8 = new Carriere($Joueur4,$Equipe2,2014);
$Carriere9 = new Carriere($Joueur4,$Equipe4,2022);
$Carriere10 = new Carriere($Joueur5,$Equipe6,2006);
$Carriere11 = new Carriere($Joueur5,$Equipe3,2010);
$Carriere12 = new Carriere($Joueur6,$Equipe7,2008);
$Carriere13 = new Carriere($Joueur6,$Equipe2,2010);

?>

 <main>   

<div class="cards">
    <div class="card joueur">
<?= $Joueur1->getInfosJoueur(); ?>
    </div>
    <div class="card joueur">
<?= $Joueur2->getInfosJoueur(); ?>
    </div>
    <div class="card joueur">
<?= $Joueur3->getInfosJoueur(); ?>
    </div>
    <div class="card joueur">
<?= $Joueur4->getInfosJoueur(); ?>
    </div>
    <div class="card joueur">
<?= $Joueur5->getInfosJoueur(); ?>
    </div>
    <div class="card joueur">
<?= $Joueur6->getInfosJoueur(); ?>
    </div>
</div>

<div class="cards">
    <div class="card Pays">
<?= $Pays1->getInfosPays(); ?>
    </div>
    <div class="card Pays">
<?= $Pays2->getInfosPays(); ?>
    </div>
    <div class="card Pays">
<?= $Pays3->getInfosPays(); ?>
    </div>
    <div class="card Pays">
<?= $Pays4->getInfosPays(); ?>
    </div>
    <div class="card Pays">
<?= $Pays5->getInfosPays(); ?>
    </div>
    <div class="card Pays">
<?= $Pays6->getInfosPays(); ?>
    </div>
</div>

<div class="cards">
    <div class="card Equipe">
<?= $Equipe1->getInfosEquipe(); ?>
    </div>
    <div class="card Equipe">
<?= $Equipe2->getInfosEquipe(); ?>
    </div>
    <div class="card Equipe">
<?= $Equipe3->getInfosEquipe(); ?>
    </div>
    <div class="card Equipe">
<?= $Equipe4->getInfosEquipe(); ?>
    </div>
    <div class="card Equipe">
<?= $Equipe5->getInfosEquipe(); ?>
    </div>
    <div class="card Equipe">
<?= $Equipe6->getInfosEquipe(); ?>
    </div>
    <div class="card Equipe">
<?= $Equipe7->getInfosEquipe(); ?>
    </div>
    <div class="card Equipe">
<?= $Equipe8->getInfosEquipe(); ?>
    </div>
    <div class="card Equipe">
<?= $Equipe9->getInfosEquipe(); ?>
    </div>
    <div class="card Equipe">
<?= $Equipe10->getInfosEquipe(); ?>
    </div>
    <div class="card Equipe">
<?= $Equipe11->getInfosEquipe(); ?>
    </div>
    <div class="card Equipe">
<?= $Equipe12->getInfosEquipe(); ?>
    </div>
</div>

 </main>




</body>
</html>




