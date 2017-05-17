<?php
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Modele/message.php");
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Modele/user.php");
require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/header.php');
require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/footer.php');
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/room.php");
session_start();
include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/dataSensor.php");
$id = $_SESSION['userID'];
$rep=get_idHouse($bdd,$id);
$idh = $rep->fetch();
$id_house = $idh['idHouse'];
$test=get_rooms($bdd,$idh['idHouse']);
?>
<ul>
<?php
$i = 0;
while($result = $test->fetch(PDO::FETCH_ASSOC))
{
  $pieces[] =  $result['name'];
  $rep2 = get_sensors($bdd,$id_house,$result['name']);
  $sensors = $rep2->fetch();
  require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/statistiques.php');
  $tab_sensors[] = $sensors['idSensors'];
  $i = $i+1;
}
?>
</ul>
<?php
if(isset($_GET['nbRoom'])){
  $piece_selected = $pieces[$_GET['nbRoom']];
  $sensors_selected = $tab_sensors[$_GET['nbRoom']];
  $tab_sensors_selected = explode(" ",$sensors_selected);
  foreach ($tab_sensors_selected as $value){
    $rep3 = get_dataWithDate($bdd,$value);
    $j = 0;
    while(($data = $rep3->fetch(PDO::FETCH_ASSOC)) && ($j < 20))
    {
      $j=$j+1;
      echo $data['data'] .' '.$data['receptionDate'].' ' .'<br />';
    }
}
}

 ?>
