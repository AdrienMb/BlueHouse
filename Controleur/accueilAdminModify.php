<LINK href="/github/bluehouse/Styles/accueiladmin.css" rel="stylesheet" type="text/css">
  <div class="title"><h2>Page administrateur</h2></div>
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
  require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/accueilAdminModify.php");
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
</div>
