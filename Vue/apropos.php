<?php
require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/header.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>A propos</title>
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
      <p align="justify">BlueHouse fut fondé en 2017, par 6 jeunes entrepreneurs provenant de la même école. Travaillant dans la bonne entente sur de nombreux projets depuis un certain temps, ce fut sans crainte qu'ils décidèrent de fonder la maison BlueHouse.</br></br>
        La maison BlueHouse est alors toujours à la recherche d'innovation, de challenge et de pérennité. En gardant cette ligne de conduite, la structure BlueHouse a décroché son premier appel d'offres par la société Domisep et réalisa alors un projet qui lança la start-up. </br><br>
        Maintenant que les fondations de la maison se sont solidifiées, BlueHouse est prêt à relever tous les défis qui lui sont réservés et est prêt à bâtir les maisons connectées de demain.</br></br>
        Ce sera donc avec grand plaisir que BlueHouse connectera vos maisons d'avenir<br>
      </p>
      <p><i>L'equipe BlueHouse</i></p>


    </div>
      <hr/>
      <div class="apropos">
    <h2>Notre equipe:<h2>
<ul>
    <div class="equipe">

       <li class="c"><img src="/github/bluehouse/Images/philippe.jpg" alt="Philippe" /></li>
      <li class="c"><img src="/github/bluehouse/Images/adrien.jpg" alt="Adrien" /></li>
       <li class="c"><img src="/github/bluehouse/Images/constance.jpg" alt="Constance" /></li>
      <li class="c"><img src="/github/bluehouse/Images/le_boss.jpg" alt="William" /></li>
      <li class="c"><img src="/github/bluehouse/Images/camille.jpg" alt="Camille" /></li>
      <li class="c"><img src="/github/bluehouse/Images/estelle.jpg" alt="Estelle" /></li>

    </div>
    </ul>
        </div>
  </body>
  <?php
  require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/footer.php');
  ?>
</html>
