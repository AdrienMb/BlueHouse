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

  function delete_sensor($bdd,$id){
    $reponse = $bdd->query('DELETE FROM sensor WHERE id="'.$id.'"');
    return $reponse;
  }

  function delete_sensor_room($bdd,$id_sensor,$id){
    $resp = $bdd->query('SELECT idSensors FROM room WHERE id="'.$id.'"');
    $rep1 = $resp -> fetch();
    echo $rep1['idSensors'];
    echo $id;
    $sensors=explode(" ",$rep1['idSensors']);
    $nis = "";
    foreach($sensors as $i){
      if($i != $id_sensor){
        $nis = $nis." ".$i;
      }
    }
    echo $nis;
    $req3=$bdd->prepare('UPDATE room SET idSensors =? WHERE id =? ');
    $tab=array($nis,$id);
    $req3->execute($tab);
    return $resp;
  }
?>
