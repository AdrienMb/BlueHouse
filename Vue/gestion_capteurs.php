<?php
require("commun.php");
require("../modele/room.php")
?>
<!DOCTYPE html>
<LINK href="../Styles/flexbox.css" rel="stylesheet" type="text/css">
<html>
    <body>

      <ul>

        <?php
        $sth=get_rooms($bdd,$id_house);
        while($result = $sth->fetch(PDO::FETCH_ASSOC))
        {

            print("<li>");
            $idsalle = $result['ID'];
            print ("<a href ='salle.php?idsalle=$idsalle'>salle : ".$result['nom']."</a>");
            print (" </li>");
        }

        ?>

    </ul>

    </body>

</html>
