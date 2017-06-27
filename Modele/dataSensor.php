<?php

    function get_dataWithDate($bdd,$idSensor){
        $datess=$bdd->query('SELECT max(receptionDate) from datasensor WHERE idSensor="'.$idSensor.'"');
        $dates=$datess->fetch();
        $date=$dates['max(receptionDate)'];
        $reponse = $bdd->prepare('SELECT data,receptionDate,type FROM datasensor WHERE idSensor=? AND receptionDate=?');
        $tab=array($idSensor,$date);
        $reponse->execute($tab);
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
