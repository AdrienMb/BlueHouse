<?php

    function get_type($bdd,$id){
        $reponse = $bdd->query('SELECT type FROM sensor WHERE id="'.$id.'"');
        return $reponse;
    }
    function set_sensor($bdd,$type,$idHouse){
      $req=$bdd->prepare('INSERT INTO sensor(type, idHouse) VALUES(?,?)');
      $tab=array($type,$idHouse );
      $req->execute($tab);
      $rep=$bdd->query('SELECT MAX(id) AS id FROM sensor');
      return $rep;
    }
    function connectNewSensor($bdd, $id, $newIdSensor){
    $reponse = $bdd->query('SELECT idSensors FROM room WHERE id="'.$id.'"');
    $rep = $reponse -> fetch();
    $str_sensor = $rep['idSensors'];
    $nis = (string) $newIdSensor;
    $str_sensor = $str_sensor . " " . $nis;
    $req2=$bdd->prepare('UPDATE room SET idSensors =? WHERE id =? ');
    $tab=array($str_sensor,$id);
    $req2->execute($tab);
    return $reponse;
  }
  function get_roomId($bdd,$id_house,$room){
      $reponse = $bdd->prepare('SELECT id FROM room WHERE idHouse=? AND name=? ');
      $tab=array($id_house,$room);
      $reponse->execute($tab);
      return $reponse;
  }
?>
