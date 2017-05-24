<LINK href="/github/bluehouse/Styles/salle.css" rel="stylesheet" type="text/css">
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
