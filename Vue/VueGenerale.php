<?php
include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/header.php");
 ?>
 <LINK href="/github/bluehouse/Styles/VueGenerale.css" rel="stylesheet" type="text/css">
 <html>

     <head>

         <meta charset="utf-8" />

         <title>Titre</title>

     </head>


     <body>

 <div class="fondDufond">

         <div class="BlockFlex">:
         <img class= "thermometre" id"thermometre" src="/github/bluehouse/Images/thermometre.png" alt="thermometre">
         <p class="radiateurs">Radiateurs allumés : 3   <br/> <br/> <br/>T° : 21°</p> </div>


         <div class="BlockFlex" >
         <img class="ampoule" id"ampoule" src="/github/bluehouse/Images/ampoule.png" alt="ampoule">
         <p   class="lumiere"> Lumière allumés : 2   <br/> <br/> <br/>Luminosité : 30% </p> </div>

         <div class="BlockFlex">
         <img class="cadena" id"cadena" src="/github/bluehouse/Images/cadena.png" alt="cadena">
         <p   class="porte"> Portes : </p>
         <div class="centre">
         <div class="onoffswitch">
         <input type="checkbox" name="onoffswitch1" class="onoffswitch-checkbox" id="myonoffswitch1" checked>
         <label class="onoffswitch-label" for="myonoffswitch1">
          <span class="onoffswitch-inner"></span>
         <span class="onoffswitch-switch"></span>
         </label>
     </div>
     </div>

         <p class="Volets"> Volets :  </p>
         <div class="centre">
         <div class="onoffswitch">
         <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch2" checked>
         <label class="onoffswitch-label" for="myonoffswitch2">
          <span class="onoffswitch-inner"></span>
         <span class="onoffswitch-switch"></span>
         </label>
     </div>
     </div>


         </div>

         <div class="BlockFlex">
         <img class="alarme" id"alarme" src="/github/bluehouse/Images/alarme.png" alt="alarme">
         <p   class="eteint"> Alarme : </p>
         <div class="centre">
         <div class="onoffswitch">
         <input type="checkbox" name="onoffswitch3" class="onoffswitch-checkbox" id="myonoffswitch3" checked>
         <label class="onoffswitch-label" for="myonoffswitch3">
             <span class="onoffswitch-inner"></span>
             <span class="onoffswitch-switch"></span>
         </label>
     </div>
 </div>
 </div>

 </div>

  </body>

 <?php
 include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/footer.php");
  ?>
