<br/>
<br/>

  <fieldset>
    <h3>Ajouter un capteur :</h3> 
      <form method="POST" action="/github/bluehouse/controleur/salle.php?idsalle=<?php print($_GET['idsalle'])?>">
          <input type="text" name="typeCapteur" value="Type du capteur" onclick="this.value='';"/>
          <br/>
          <input type='submit'/>
      </form>
  </fieldset>
