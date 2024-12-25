<?php 
require_once "./src/utilisateur.php" ;
require_once"./test.php"
class patient extends Utilisateur {
   protected $rendez_vous ;
   public function prendreRendez_vous($date){
    $this ->rendez_vous=$date;
return "le date " . $date ;

   }
  
   



}

?>