<?php
require_once "./src/utilisateur.php"; 

$docteur = new Utilisateur("Mohamed", "Chergu", "Medcin"); 
var_dump($docteur->AfficherFullName()); 
echo '<br>';
$docteur ->changeNom("imrane");

var_dump($docteur->AfficherFullName()); 
echo '<br>';

$docteur ->changePrenom("ait dahmade");
var_dump($docteur->AfficherFullName()); 

?>
