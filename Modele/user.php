<?php

require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/connexion.php");

    function get_idHouse($bdd,$id){
        $reponse = $bdd->query('SELECT idHouse FROM user WHERE id="'.$id.'"');
        return $reponse;
    }

    function get_nameSexe($bdd,$id){
        $reponse = $bdd->query('SELECT firstName,lastName,sexe FROM user WHERE id="'.$id.'"');
        return $reponse;
    }

    function get_phoneNumber($bdd,$id){
        $reponse = $bdd->query('SELECT phoneNumber FROM user WHERE id="'.$id.'"');
        return $reponse;
    }

    function get_id($bdd,$email){
        $reponse = $bdd->query('SELECT id FROM user WHERE email="'.$email.'"');
        return $reponse;
    }

    function get_password($bdd,$email){
        $reponse = $bdd->query('SELECT id,password FROM user WHERE email="'.$email.'"');
        return $reponse;
    }

    function getnbPassword($bdd,$email){
        $reponse = $bdd->query('SELECT COUNT(*) AS ct  FROM user WHERE email="'.$email.'"');
        return $reponse;
    }
    function emailUnique($bdd,$email){
        $reponse = $bdd->query('SELECT id FROM user WHERE email="'.$email.'"');
        return $reponse;
    }

    function entree_bdd($bdd,$tab){
      $req=$bdd->prepare('INSERT INTO user(lastName, firstName, sexe, phoneNumber, email, password, dateOfBirth, idHouse) VALUES(?,?,?,?,?,?,?,?)');
      $req->execute($tab);
      return $req;
    }

    function get_nameSexeUsingId($bdd,$id){
        $reponse = $bdd->query('SELECT lastName, firstName, sexe FROM user WHERE id="'.$id.'"');
        return $reponse;
    }

?>
