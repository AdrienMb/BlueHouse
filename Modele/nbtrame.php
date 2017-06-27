<?php

    function get_nb($bdd){
        $reponse = $bdd->query('SELECT * FROM nbtrame');
        return $reponse;
    }

    function set_nb($bdd,$n){
      $req=$bdd->prepare('UPDATE nbtrame SET nbtrame =?');
      $tab=array($n);
      $req->execute($tab);
    }


?>
