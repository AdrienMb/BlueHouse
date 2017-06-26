<?php
include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/header.php");
session_start();
$id=$_SESSION['userID'];
 ?>
<br/>
<?php
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/salle.php");
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/room.php");
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/sensors.php");
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/user.php");

$id_house=get_idhouse($bdd,$id)->fetch();
$sensor=get_sensors($bdd,$id_house['idHouse'],$_GET['idsalle'])->fetch();
$sensors=explode(" ",$sensor['idSensors']);
$k=1;
foreach($sensors as $i){
    $datasensors=get_dataWithDate($bdd,$i);
    $capteurs=$datasensors->fetch();
    $date=$capteurs['receptionDate'];
    $donnees=$capteurs['data'];
    $type=$capteurs['type'];
    if(empty($donnees)){
      $type="Capteur ".$k;
      $donnees="pas de données recueillis pour ce capteur";
      $k++;
    }
    require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/affiche_capteurs.php");
}


if(!empty($_POST['typeCapteur'])){
  $rep=set_sensor($bdd,$_POST['typeCapteur'],$id_house['idHouse'])->fetch();
  $idroom=get_roomId($bdd,$id_house['idHouse'],$_GET['idsalle'])->fetch();
  connectNewSensor($bdd,$idroom['id'],$rep['id']);
  echo '<script language="Javascript">
  <!--
  document.location.replace("salle.php?idsalle='.$_GET['idsalle'].'");
  // -->
  </script>';
}

if(!empty($_POST['delete'])){
  delete_sensor($bdd,$_POST['delete']);
  $id_room = get_roomId($bdd,$id_house['idHouse'],$_GET['idsalle']) -> fetch();
  delete_sensor_room($bdd,$_POST['delete'],$id_room['id']);

}

 ?>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/fin_accueilProp.php");
include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/footer.php");
 ?>
