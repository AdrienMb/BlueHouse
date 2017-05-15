<?php
    require("connexion.php");
    
    function get_type($bdd,$id){
        $reponse = $bdd->query('SELECT type FROM sensor WHERE id="'.$id.'"');
        return $reponse;
    }
?>
