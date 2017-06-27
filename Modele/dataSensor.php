<?php

    function get_dataWithDate($bdd,$idSensor){
        $reponse = $bdd->query('SELECT data,receptionDate,type FROM datasensor WHERE idSensor="'.$idSensor.'"');
        return $reponse;
    }

    function set_trame($bdd,$idSensor,$type,$receptionDate,$data){
      $req=$bdd->prepare('INSERT INTO datasensor(idSensor, type, receptionDate, data) VALUES(?,?,?,?)');
      $tab=array($idSensor,$type,$receptionDate,$data);
      $req->execute($tab);
    }


        function get_lastDate($bdd){
          $rep=$bdd->query('SELECT max(receptionDate) FROM datasensor');
          return $rep;
        }

?>
