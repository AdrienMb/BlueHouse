<?php
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/commun.php");?>
<!DOCTYPE html>
<LINK href="/github/bluehouse/Styles/flexbox.css" rel="stylesheet" type="text/css">
<html>
    <header>

      <ul class="ul">

      <li class="li">
      <p> <img class="logo" src="/github/bluehouse/Images/logo.png" alt="logo Blue House" /> </p></li>
        <div class="deco">
        <?php
        require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Modele/connexion.php");
        include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Controleur/connexion.php");
        ?>
      </div>
      </ul>

    </header>

</html>
