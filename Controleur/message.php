<?php
include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Modele/message.php");
include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Modele/user.php");
require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/header.php');
require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/footer.php');
$id_house = 1;

$answer = get_messagesWithTitleAndIdAndDate($bdd,$id_house);

while ($donnees = $answer->fetch())
{
  $answer2 = get_nameSexeUsingId($bdd,$donnees['idWriter']);
  $donnees2 = $answer2->fetch();
  $firstName =  $donnees2['firstName'];
  $lastName = $donnees2['lastName'];
  $dateWrite = $donnees['dateWrite'];
  $title = $donnees['title'];
	$data = $donnees['data'];
  require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/message.php");
}

$answer -> closeCursor();

 ?>
