<LINK href="/github/bluehouse/Styles/flexbox.css" rel="stylesheet" type="text/css">
<LINK href="/github/bluehouse/Styles/statistiques.css" rel="stylesheet" type="text/css">
<?php
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Modele/message.php");
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Modele/user.php");
require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/header.php');
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/room.php");
session_start();
include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/dataSensor.php");
$id = $_SESSION['userID'];
$rep=get_idHouse($bdd,$id);
$idh = $rep->fetch();
$id_house = $idh['idHouse'];
$test=get_rooms($bdd,$idh['idHouse']);
?>
<div class="pieces">
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
</div>
<?php
if(isset($_GET['nbRoom'])){
  ?>
  <div class="flex-container">
  <?php
  $piece_selected = $pieces[$_GET['nbRoom']];
  $sensors_selected = $tab_sensors[$_GET['nbRoom']];
  $tab_sensors_selected = explode(" ",$sensors_selected);
  $n_sensor = 2;
  foreach ($tab_sensors_selected as $value){
    $n_sensor = $n_sensor-1;
    $rep3 = get_dataWithDate($bdd,$value);
    $j = 0;
    $test_date = "";
    $test_value = 0;
    $diviseur = 0;
    $donnees = array();
    $dates = array();
    while(($data = $rep3->fetch(PDO::FETCH_ASSOC)) && ($j < 6))
    {
      $current_date = substr($data['receptionDate'], 0, 10);
      if($current_date == $test_date || $test_date == ""){
        $test_value = $test_value + $data['data'];
        $diviseur = $diviseur +1;
      }
      else{
      $j=$j+1;
      #echo $data['data'] .' '.$data['receptionDate'].' ' .'<br />';
      $donnees[] = $test_value/$diviseur;
      $dates[] = substr($test_date, -5);
      $type = (string) $data['type'];
      $test_value = $data['data'];
      $diviseur = 1;
    }
    $test_date = $current_date;
    }
    if($j != 0){
      $donnees[] = $test_value/$diviseur;
      $dates[] = substr($test_date, -5);
    }
    ?>
    <div class="Block">
    <?php
    $donneesI = array_reverse($donnees);
    $datesI = array_reverse($dates);
    require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/graphe.php');
    ?>
  </div>
    <?php
}
while($n_sensor >= 0){
  ?><div class="Block"></div> <?php
  $n_sensor = $n_sensor - 1;
}
?>
</div>
<?php
}
require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/footer.php');
