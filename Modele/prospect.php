<?php
    require("connexion.php");

    function get_nameEmail($bdd, $email){
        $reponse = $bdd->query('SELECT firstName,lastName FROM prospect WHERE email="'.$email.'"');
        return $reponse;
    }
?>
