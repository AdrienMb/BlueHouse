<?php
include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/header.php");
 ?>
<!DOCTYPE html>
<LINK href="/github/bluehouse/Styles/fond.css" rel="stylesheet" type="text/css">

<LINK href="/github/bluehouse/Styles/VueGenerale.css" rel="stylesheet" type="text/css">
<html>

    <head>

        <meta charset="utf-8" />

        <title>Titre</title>

    </head>


    <body>

<div class="fondDufond">

        <div class="BlockFlex">
        <img class= "thermometre" id"thermometre" src="/github/bluehouse/Images/thermometre.png" alt="thermometre">
        <p class="radiateurs">Radiateurs allumés : 3   <br/> <br/> <br/>T° : 21°</p> </div>


        <div class="BlockFlex" >
        <img class="ampoule" id"ampoule" src="/github/bluehouse/Images/ampoule.png" alt="ampoule">
        <p   class="lumiere"> Lumière allumés : 2   <br/> <br/> <br/>Luminosité : 30% </p> </div>

        <div class="BlockFlex">
        <img class="cadena" id"cadena" src="/github/bluehouse/Images/cadena.png" alt="cadena">
        <p   class="porte"> Portes : Fermer   <br/> <br/> <br/>
        Volets : Fermer </p> </div>

        <div class="BlockFlex">
        <img class="alarme" id"alarme" src="/github/bluehouse/Images/alarme.png" alt="alarme">
        <p   class="eteint"> Alarme : Eteint </p> </div>

</div>

 </body>
 <?php
 include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/footer.php");
  ?>
