<?php
session_start(); 
$_SESSION = array();
?>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/github/bluehouse/styles/style.css" />
<link rel="stylesheet" type="text/css" href="/github/bluehouse/styles/flexbox.css" />
<link rel="stylesheet" type="text/css" href="/github/bluehouse/Styles/fond.css" />
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Page d'accueil</title>
</head>
<body>
  <div class="accueil">
  <p>
    <?php
    require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/header_deco.php");
    include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Controleur/inscription.php");
    require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/footer_deco.php");
    ?>

</form>
</div>
</body>
</html>
