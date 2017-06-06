<LINK href="/github/bluehouse/Styles/salle.css" rel="stylesheet" type="text/css">
<div class="salle">
  <div class="ligne"></div>
<?php
    $nomSalle=$_GET['idsalle'];
    ?>
    <h1>
      <div class="titre_piece">
    <?php
    echo("Bienvenue dans :</br>".$nomSalle."<br/>");

?>
<div class="description"><p>Cette page vous permet de visualiser les différents capteurs de la pièce. Les informations affichées sont les dernières recueillies. Vous pouvez ajouter un capteur à la pièce ci-dessous.</div></p>
</div>
</h1>

<div class="formulaire_capteur">
  <fieldset>

    <h3>Ajouter un capteur :</h3>
      <form method="POST" action="/github/bluehouse/controleur/salle.php?idsalle=<?php print($_GET['idsalle'])?>">
          <input type="text" name="typeCapteur" placeholder="Type du capteur"/>
          <br/>
          <input type='submit'/>
      </form>
  </fieldset>
</div>
</div>

<div class="all_sensors">
