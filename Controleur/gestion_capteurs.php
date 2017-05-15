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

      <ul>
        <?php
        session_start();
        $id = $_SESSION['userID'];
        $rep=get_idHouse($bdd,$id);
        $idh = $rep->fetch();
        $test=get_rooms($bdd,$idh['idHouse']);
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
