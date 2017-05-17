<?php

    function get_dataWithDate($bdd,$idSensor){
        $reponse = $bdd->query('SELECT data,receptionDate FROM datasensor WHERE idSensor="'.$idSensor.'"');
        return $reponse;
    }
?>
