<?php

    function get_dataWithDate($bdd,$idSensor){
        $reponse = $bdd->query('SELECT data,receptionDate,type FROM datasensor WHERE idSensor="'.$idSensor.'"');
        return $reponse;
    }

?>
