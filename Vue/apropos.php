<?php
require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/header.php');
require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/footer.php');
?>

<!DOCTYPE html>
<LINK href="/github/bluehouse/Styles/assistance.css" rel="stylesheet" type="text/css">
<html>
  <head>
    <title>A propos</title>
      <style>
      /* map est utilisé une fois donc ID */
       #map {
        height: 400px;
        width: 60%;
        margin-left: 20%;
       }
       .nhistoire{
         border: 6px black double;
         border-spacing: 20px;
         border-radius: 20%;
         padding: 2%;
         width: auto;
         margin-left: 30%;
         margin-right: 30%;
       }
       .equipe{
         width: 60%;
         margin-left: 20%;
       }
    </style>
  </head>
  <body>

    <center>
      <h2>Notre position :</h2>
    </center>
    <div id="map"></div>
      <script>
      /* Appelle de la fonction js map */
      function initMap() {
        var uluru = {lat: 48.853856, lng: 2.328150};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: uluru /* coordonées du centre de la map */
          });
        var marker = new google.maps.Marker({
          position: {lat: 48.82504, lng: 2.280121}, /* coordonées du marqueur */
          map: map
          });
        }
        </script>
        <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkg7stFuGVjSA09jHBY96GqoekgCkq_jA&callback=initMap"> /* API google avec la clé */
        </script>
        <center>
          <h5>10, rue de Vanves</br>
            ISSY-LES-MOULINEAUX,  92130</br>
            <i>Métro 12, Corentin Celton</i></h5>
              <hr/>
            <h2>Notre histoire :</h2>
        </center>
    <div class="nhistoire">
      <h5 align="justify">BlueHouse fut fondé en 2017, par 6 jeunes entrepreneurs provenant de la même école. Travaillant dans la bonne entente sur de nombreux projets depuis un certain temps, ce fut sans crainte qu'ils décidèrent de fonder la maison BlueHouse.</br></br>
        La maison BlueHouse est alors toujours à la recherche d'innovation, de challenge et de pérennité. En gardant cette ligne de conduite, la structure BlueHouse a décroché son premier appel d'offres par la société Domisep et réalisa alors un projet qui lança la start-up. </br><br>
        Maintenant que les fondations de la maison se sont solidifiées, BlueHouse est prêt à relever tous les défis qui lui sont réservés et est prêt à bâtir les maisons connectées de demain.</br></br>
        Ce sera donc avec grand plaisir que BlueHouse connectera vos maisons d'avenir<br>
      </h5>
      <h6><i>L'equipe BlueHouse</i></h6>

    <center></div>
      <hr/>
    <h2>Notre equipe:<h2>
    </center>
    <div class="equipe">
      <p> <img src="/github/bluehouse/Images/philippe.jpg" alt="Philippe" />
      <img src="/github/bluehouse/Images/adrien.jpg" alt="Adrien" />
      <img src="/github/bluehouse/Images/constance.jpg" alt="Constance" />
      <img src="/github/bluehouse/Images/le_boss.jpg" alt="William" />
      <img src="/github/bluehouse/Images/camille.jpg" alt="Camille" />
      <img src="/github/bluehouse/Images/estelle.jpg" alt="Estelle" /> </p>
    </div>
  </body>
</html>
