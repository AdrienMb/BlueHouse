<title>Gestion des capteurs</title>

<div class="pieces">
  <form method="post" action="/github/bluehouse/Controleur/gestion_capteurs.php">
<?php
echo "<a href =/github/bluehouse/controleur/salle.php?idsalle=".$nomPiece.">".$nomPiece."</a>";
?>


<div class="bton">
<input type="image" name="delete" src="/github/bluehouse/Images/PETITE_POUBELLE.png" value=<?php echo $idpiece; ?> />
</div>
</form>
</div>
