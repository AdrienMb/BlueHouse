<?php
include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/header.php");
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/user.php");
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/room.php");
include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/footer.php");
?>
<!DOCTYPE html>
<LINK href="/github/bluehouse/Styles/flexbox.css" rel="stylesheet" type="text/css">
<html>
    <body>

      <ul
        <?php
        session_start();
        $id = $_SESSION['userID'];
        $id_house=get_idHouse($bdd,$id);
        $sth=get_rooms($bdd,$id_house);
                $test=get_rooms($bdd,$id_house);
      /*  while($result = $sth->fetch(PDO::FETCH_ASSOC))
        {

            print("<li>");
            $idsalle = $result['ID'];
            print ("<a href ='salle.php?idsalle=$idsalle'>salle : ".$result['nom']."</a>");
            print (" </li>");
        }*/

        ?>

    </ul>

    </body>

</html>
