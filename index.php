<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/github/bluehouse/styles/style.css" />
<link rel="stylesheet" type="text/css" href="/github/bluehouse/styles/flexbox.css" />
<link rel="stylesheet" type="text/css" href="/github/bluehouse/Styles/fond.css" />
<html>
<head>
  <title>Page d'accueil</title>
</head>
<body>
  <div class="accueil">
  <p>
    <?php
    session_start();
    require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/header_deco.php");
    include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Controleur/inscription.php");
    require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/footer.php");
    ?>

</form>
</div>
</body>
</html>
