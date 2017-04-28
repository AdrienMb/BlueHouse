<!DOCTYPE html>
<meta charset="UTF-8">
<LINK href="style.css" rel="stylesheet" type="text/css">
<html>
<head>
  <title>Page d'accueil</title>
</head>
<header>
  <img src="images/logo-app2.png" class="logo">
</header>
<body>
  <p>
    <?php
    try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=bluehouse;charset=utf8','root','');
      }
      catch(Exception $e)
      {
        die('Erreur :'.$e->getMessage());
      }
      ?>
  </p>
  <form>
  <div class="formulaire1">
    <h2>Inscrivez vous !</h2>
    <p>
        On insèrera ici les éléments de notre formulaire.
    </p>
      <input type="text" name="prenom" placeholder="Mets ton nom !" />
      <input type="submit" value="Valider" />
    <p>Avez vous une installation BlueHouse ?</p>
    <input type="radio" name="installation" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>

    <input type="radio" name="installation" value="non" id="non" /> <label for="non">Non</label>
  </div>
</form>
</body>
</html>
