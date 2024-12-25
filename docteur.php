<?php 
require_once "./src/utilisateur.php" ;

class medcin extends Utilisateur {
   protected $specialiste ;
 public function setSpecialiste ($specialiste){
  $this ->specialiste = $specialiste;
 }

 public function consulterPatient($patient) {
   return "Consultation avec " . $patient->getNomComplet();
}
   



}

?>