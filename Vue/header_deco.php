<?php
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/commun.php");?>
<!DOCTYPE html>
<LINK href="/github/bluehouse/Styles/flexbox.css" rel="stylesheet" type="text/css">
<html><header>
  <a href="/github/bluehouse/index.php" class="logoLink"> <img class="logo" src="/github/bluehouse/Images/logo.png" alt="logo Blue House" /> </a>
</header>
    <header class="header">

      <ul class="ul">


       <a href="/github/bluehouse/index.php" class="logoLink"> <img class="logo" src="/github/bluehouse/Images/logo.png" alt="logo Blue House" /> </a>
        <div class="deco">
        <?php
        require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Modele/connexion.php");
        include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Controleur/connexion.php");
        ?>
      </div>
      </ul>

    </header>

</html>
