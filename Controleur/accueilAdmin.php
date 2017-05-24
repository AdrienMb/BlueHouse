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
  ?>
       <tr>
       <td><?php echo $donnees['id']; ?></td>
       <td><?php echo $donnees['lastName']; ?></td>
       <td><?php echo $donnees['firstName']; ?></td>
       <td><?php echo $donnees['dateOfBirth']; ?></td>
       <td><?php echo $donnees['phoneNumber']; ?></td>
       <td><?php echo $donnees['email']; ?></td>
       <td><?php echo $donnees['idHouse']; ?></td>
       <form method="post" action="/github/bluehouse/Controleur/accueilAdmin.php">
       <td><input type="image" name="modify" src="/github/bluehouse/Images/modify.png" width="20" value=<?php echo $donnees['id']; ?> /></td>
       <td><input type="image" name="delete" src="/github/bluehouse/Images/delete.jpg" width="20" value=<?php echo $donnees['id']; ?> /></td>
     </form>
     </tr>
  <?php
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
