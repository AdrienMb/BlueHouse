<?php
    require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Modele/connexion.php");

    function get_messagesWithTitleAndIdAndDate($bdd,$id_house){
        $reponse = $bdd->query('SELECT data,title,idWriter,dateWrite FROM message WHERE idHouse="'.$id_house.'"');
        return $reponse;
    }

?>
