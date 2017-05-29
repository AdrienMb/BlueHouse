<LINK href="/github/bluehouse/Styles/accueiladmin.css" rel="stylesheet" type="text/css">
<?php if($donnees['id'] != $_GET['id']){ ?>
     <tr>
     <td><?php echo $donnees['id']; ?></td>
     <td><?php echo $donnees['lastName']; ?></td>
     <td><?php echo $donnees['firstName']; ?></td>
     <td><?php echo $donnees['dateOfBirth']; ?></td>
     <td><?php echo $donnees['phoneNumber']; ?></td>
     <td><?php echo $donnees['email']; ?></td>
     <td><?php echo $donnees['idHouse']; ?></td>
     <form method="post" action="/github/bluehouse/Controleur/accueilAdmin.php">
     <td><a href=<?php echo "accueilAdminModify.php?id=".$donnees['id']."" ?>><img src="/github/bluehouse/Images/modify.png" width="20"></a></td>
     <td><input type="image" name="delete" src="/github/bluehouse/Images/delete.jpg" width="20" value=<?php echo $donnees['id']; ?> /></td>
   </form>
   </tr>
<?php
}
else{
?>
<form method="post" action="/github/bluehouse/Controleur/accueilAdmin.php">
<tr>
<td><?php echo $donnees['id']; ?></td>
<td><input type="text" name="lastName" value=<?php echo $donnees['lastName'];?> size="8"/></td>
<td><input type="text" name="firstName" value=<?php echo $donnees['firstName']; ?> size="8"/></td>
<td><input type="text" name="dateOfBirth" value=<?php echo $donnees['dateOfBirth']; ?> size="8"/></td>
<td><input type="text" name="phoneNumber" value=<?php echo $donnees['phoneNumber']; ?> size="8"/></td>
<td><input type="text" name="email" value=<?php echo $donnees['email']; ?> size="15"/></td>
<td><input type="text" name="idHouse" value=<?php echo $donnees['idHouse']; ?> size="8"/></td>
<td><input class="image_validate" type="image" src="/github/bluehouse/Images/validate.png" name="modify" /></td>
<td><input type="image" name="delete" src="/github/bluehouse/Images/delete.jpg" width="20" value=<?php echo $donnees['id']; ?> /></td>
<input type="hidden" name="id" value=<?php echo $donnees['id']; ?> />
</form>
</tr>
  <?php
}
 ?>
