<LINK href="/github/bluehouse/Styles/flexbox.css" rel="stylesheet" type="text/css">
<LINK href="/github/bluehouse/Styles/salle.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<script src="/github/bluehouse/Vue/vérification_Supression.js" type="text/javascript"></script>

<div class="capteurs">
<?php
echo ("<div class='date'>".$date."</div></br><div class='data'>".$type." : ".$donnees."</div>");
 ?>
 <div class="bton">
   <input type="image" onclick="return confirm('Etes-vous sûr de vouloir supprimer ce capteur?');"name="delete" src="/github/bluehouse/Images/PETITE_POUBELLE.png" value=<?php echo $i; ?> />

 </div></br>
</div>
