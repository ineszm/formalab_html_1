<?php
include "config.php";
$base=connect();
$Nom=$_GET['nom'];
$m=$_GET['mdp'];
$radio=$_GET['exampleRadios'];
$text=$_GET['txt'];
$req="INSERT INTO utilsateur(id,nom,motpasse,genre,text) VALUES (null,'$Nom','$m','$radio','$text')";
$resp=$base->exec($req);
if ($resp==1) {
    echo "donnees bien inserer";
 } else {
    echo "requette erronée";
 
 }




?>