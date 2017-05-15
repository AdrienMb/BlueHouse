<?php
    require("connexion.php");

    function get_questions($bdd){
        $reponse = $bdd->query('SELECT message  FROM faq where type = 0');
        return $reponse;
    }

    function get_answers($bdd,$idlinked){
        $reponse = $bdd->query('SELECT message  FROM faq WHERE type="'.$idlinked.'"');
        return $reponse;
    }
?>
