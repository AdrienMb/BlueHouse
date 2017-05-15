<?php
    require("connexion.php");


    function get_idHouse($bdd,$email){
        $reponse = $bdd->query('SELECT idHouse FROM user WHERE email="'.$email.'"');
        return $reponse;
    }

    function get_nameSexe($bdd,$email){
        $reponse = $bdd->query('SELECT firstName,lastName,sexe FROM user WHERE email="'.$email.'"');
        return $reponse;
    }

    function get_phoneNumber($bdd,$email){
        $reponse = $bdd->query('SELECT phoneNumber FROM user WHERE email="'.$email.'"');
        return $reponse;
    }

    function get_id($bdd,$email){
        $reponse = $bdd->query('SELECT id FROM user WHERE email="'.$email.'"');
        return $reponse;
    }

    function get_mdp($bdd,$email){
        $reponse = $bdd->query('SELECT id,password FROM user WHERE email="'.$email.'"');
        return $reponse;
    }


?>
