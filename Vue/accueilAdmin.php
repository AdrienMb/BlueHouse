
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
