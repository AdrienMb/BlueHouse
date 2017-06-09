<script src="/github/bluehouse/Vue/vérification_Supression.js" type="text/javascript"></script>
<div class="Nom">
      <?php
  echo $infos['lastName']." ";
  echo $infos['firstName'];
  ?>
  <form method="POST" action="/github/bluehouse/controleur/accueil.php">
  <div class="bton">
  <input type="image" onclick="return confirm('Etes-vous sûr de vouloir supprimer cet utilisateur?');"name="delete" src="/github/bluehouse/Images/PETITE_POUBELLE.png" value=<?php echo $value; ?> />

  </div></br>
    </form>
</div>
