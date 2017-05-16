<?php
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Modele/message.php");
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Modele/user.php");
require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/header.php');
require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/footer.php');
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/room.php");
session_start();
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
explode(" ",$sensors['idSensors']);
if(isset($_GET['nbRoom'])){
  echo $_GET['nbRoom'];
}

 ?>
