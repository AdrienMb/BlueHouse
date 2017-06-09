<script src="/github/bluehouse/Vue/vérification_Supression.js" type="text/javascript"></script>
<title>Gestion des capteurs</title>
<?php
echo "<a href =/github/bluehouse/controleur/salle.php?idsalle=".$nomPiece.">".$nomPiece."</a>";
?>


<div class="bton">
<input type="image" onclick="return confirm('Etes-vous sûr de vouloir supprimer cette salle?');"name="delete" src="/github/bluehouse/Images/PETITE_POUBELLE.png" value=<?php echo $idpiece; ?> />

</div></br>
