<?php

require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/connexion.php");
    function get_rooms($bdd,$id_house){
        $reponse = $bdd->query('SELECT name,id FROM room WHERE idHouse="'.$id_house.'"');
        return $reponse;
    }


    function get_sensors($bdd,$id_house,$name){
        $reponse = $bdd->query('SELECT idSensors FROM room WHERE idHouse="'.$id_house.'" AND name="'.$name.'"');
        return $reponse;
    }
    function set_room($bdd,$room,$idHouse){
      $req=$bdd->prepare('INSERT INTO room(idHouse,name,idSensors) VALUES(?,?,?)');
      $tab=array($idHouse,$room,'' );
      $req->execute($tab);
      return $req;
    }

    function delete_room($bdd,$id){
      $reponse = $bdd->query('DELETE FROM room WHERE id="'.$id.'"');
      return $reponse;
    }


?>
