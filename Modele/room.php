<?php

require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/connexion.php");
    function get_rooms($bdd,$id_house){
        $reponse = $bdd->query('SELECT name FROM room WHERE idHouse="'.$id_house.'"');
        return $reponse;
    }

    function get_sensors($bdd,$id_house,$name){
        $reponse = $bdd->query('SELECT idSensors FROM room WHERE idHouse="'.$id_house.'" AND name="'.$name.'"');
        return $reponse;
    }


?>
