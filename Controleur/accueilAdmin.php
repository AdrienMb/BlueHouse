<LINK href="/github/bluehouse/Styles/accueiladmin.css" rel="stylesheet" type="text/css">
<div class="acc">
<table>
  <caption><h1>Utilisateurs</h1></caption>
    <tr>
       <th>id</th>
       <th>Nom</th>
       <th>Prénom</th>
       <th>Date de naissance</th>
       <th>Portable</th>
       <th>Email</th>
       <th>idHouse</th>
       </tr>
<?php
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Modele/user.php");

$rep = get_allUsers($bdd);

while($donnees = $rep->fetch(PDO::FETCH_ASSOC))
{
  require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/accueilAdmin.php");
}

 ?>
       </table>
<?php
if(!empty($_POST['delete'])){
  delete_user($bdd,$_POST['delete']);
  echo '<script language="Javascript">
<!--
document.location.replace("accueilAdmin.php");
// -->
</script>';
}
?>
<?php
if(!empty($_POST['email'])){
  include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/commun.php");
  modify_bdd($bdd,$_POST['lastName'],$_POST['firstName'],$_POST['dateOfBirth'],$_POST['phoneNumber'],$_POST['email'],$_POST['idHouse'],$_POST['id']);
  echo '<script language="Javascript">
<!--
document.location.replace("accueilAdmin.php");
// -->
</script>';
}
?>
</div>
