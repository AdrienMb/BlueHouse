<?php
include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/header.php");
session_start();
$id=$_SESSION['userID'];
 ?>
<br/>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/salle.php");
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/room.php");
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/datasensor.php");
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/sensors.php");
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/user.php");
$id_house=get_idhouse($bdd,$id)->fetch();
$sensor=get_sensors($bdd,$id_house['idHouse'],$_GET['idsalle'])->fetch();
$sensors=explode(" ",$sensor['idSensors']);
foreach($sensors as $i){
    $datasensors=get_dataWithDate($bdd,$i);
    $last=$datasensors->fetch();
    $capteurs=$datasensors->fetch();
    $date=$capteurs['receptionDate'];
    $donnees=$capteurs['data'];
    include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/affiche_capteurs.php");
}
?>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/formulaire_capteur.php");


if(!empty($_POST['typeCapteur'])){
  $rep=set_sensor($bdd,$_POST['typeCapteur'],$id_house['idHouse'])->fetch();
  $idroom=get_roomId($bdd,$id_house['idHouse'],$_GET['idsalle'])->fetch();
  echo($rep['id']);
  connectNewSensor($bdd,$idroom['id'],$rep['id']);
}
 ?>

<?php
include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/footer.php");
 ?>
