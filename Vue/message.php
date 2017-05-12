<link rel="stylesheet" type="text/css" href="../Styles/contact.css" />
<?php
include("../Modele/message.php");
include("../Modele/user.php");
$id_house = 1;

$answer = get_messagesWithTitleAndIdAndDate($bdd,$id_house);
?>
<ul>
<?php
while ($donnees = $answer->fetch())
{
  $answer2 = get_nameSexeUsingId($bdd,$donnees['idWriter']);
  $donnees2 = $answer2->fetch();
  ?>
<li>
  <?php
  echo $donnees2['firstName'] .' '.$donnees2['lastName'].' '. $donnees['dateWrite']. ' ' .'<br />';
  echo $donnees['title'] . '<br />';
	echo $donnees['data'] . '<br />';
  ?>
</li>
  <?php

}
?>
</ul>
<?php
$answer -> closeCursor();

 ?>
