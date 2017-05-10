<?php
include("../Modele/message.php");
include("../Modele/user.php");
$id_house = 1;

$answer = get_messagesWithTitleAndIdAndDate($bdd,$id_house);

while ($donnees = $answer->fetch())
{
  $answer2 = get_nameSexeUsingId($bdd,$donnees['idWriter']);
  $donnees2 = $answer2->fetch();
  echo $donnees2['firstName'] .' '.$donnees2['lastName'].' '. $donnees['dateWrite']. ' ' .'<br />';
  echo $donnees['title'] . '<br />';
	echo $donnees['data'] . '<br />';
}
$answer -> closeCursor();

 ?>
