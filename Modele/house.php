<?php
    require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/connexion.php");

    function get_informations($bdd,$id){
        $reponse = $bdd->query('SELECT name,city,address,postalCode FROM house WHERE id="'.$id.'"');
        return $reponse;
    }

    function get_idOwner($bdd,$id){
        $reponse = $bdd->query('SELECT idOwner FROM house WHERE id="'.$id.'"');
        return $reponse;
    }

    function get_idUsers($bdd,$id){
        $reponse = $bdd->query('SELECT idUsers FROM house WHERE id="'.$id.'"');
        return $reponse;
    }

    function connectNewUser($bdd, $id, $idHouse){
    $reponse = $bdd->query('SELECT idUsers FROM house WHERE id="'.$idHouse.'"');
    $rep = $reponse -> fetch();
    $str_user = $rep['idUsers'];
    $nis = (string) $id;
    $str_user = $str_user . " " . $nis;
    $req2=$bdd->prepare('UPDATE house SET idUsers =? WHERE id =? ');
    $tab=array($str_user,$idHouse);
    $req2->execute($tab);
    return $reponse;
  }
?>
