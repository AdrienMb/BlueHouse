<?php
    require("connexion.php");

    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
  /**  function mdp($db,$identifiant){
        $reponse = $db->query('SELECT id, mdp FROM Utilisateurs WHERE identifiant="'.$identifiant.'"');
        return $reponse;
    }

    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    function utilisateurs($db){
        $reponse = $db->query('SELECT identifiant FROM Utilisateurs');
        return $reponse;
    }**/
    function emailUnique($bdd,$email){
        $reponse = $bdd->query('SELECT id FROM user WHERE email="'.$email.'"');
        return $reponse;
    }

    function entree_bdd($bdd,$tab){
      $req=$bdd->prepare('INSERT INTO user(lastName, firstName, sexe, phoneNumber, email, password, dateOfBirth, idHouse) VALUES(?,?,?,?,?,?,?,?)');
      $req->execute($tab);
      return $req;
    }

?>
