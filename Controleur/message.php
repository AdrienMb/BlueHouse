<link rel="stylesheet" type="text/css" href="../Styles/contact.css" />
<?php
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Modele/message.php");
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Modele/user.php");
require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/header.php');
require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/footer.php');
session_start();
$id = $_SESSION['userID'];
$rep=get_idHouse($bdd,$id);
$idh = $rep->fetch();
echo $idh['idHouse'];
$answer = get_messagesWithTitleAndIdAndDate($bdd,$idh['idHouse']);
?>
<div class="ul_message">
<?php
$i = -1;
while ($donnees = $answer->fetch())
{
  $answer2 = get_nameSexeUsingId($bdd,$donnees['idWriter']);
  $donnees2 = $answer2->fetch();
  $firstNamet[] =  $donnees2['firstName'];
  $lastNamet[] = $donnees2['lastName'];
  $dateWritet[] = $donnees['dateWrite'];
  $titlet[] = $donnees['title'];
	$datat[] = $donnees['data'];
  $i = $i+1;
}
if($i>20){$i=20;}
for($i; $i>=0; $i--)
{
  $firstName = $firstNamet[$i];
  $lastName = $lastNamet[$i];
  $dateWrite = $dateWritet[$i];
  $title = $titlet[$i];
	$data = $datat[$i];
  require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/message.php");
}
  require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/formulaire_message.php");
    ?>
</div>
<?php
if(!empty($_POST['title']) && !empty($_POST['message'])){
  input_message($bdd,$id,$_POST['title'], $_POST['message'], $idh['idHouse']);
}
$answer -> closeCursor();

 ?>
