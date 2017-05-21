<?php
include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/header.php");
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/user.php");
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/room.php");
?>
<div class="fond_gestion">
<!DOCTYPE html>
<LINK href="/github/bluehouse/Styles/flexbox.css" rel="stylesheet" type="text/css">
  <LINK href="/github/bluehouse/Styles/gestion_capteurs.css" rel="stylesheet" type="text/css">
<html>
    <body>

      <ul class="affiche_pieces">
        <?php
        session_start();
        $id = $_SESSION['userID'];
        $rep=get_idHouse($bdd,$id);
        $idh = $rep->fetch();
        $test=get_rooms($bdd,$idh['idHouse']);
        $i=-1;
        while($result = $test->fetch(PDO::FETCH_ASSOC))
        {
          $pieces[] =  $result['name'];
          $i = $i+1;
        }
        echo("Pièces de la maison :</br></br>");
        for($i; $i>=0; $i--)
        {
        	$nomPiece = $pieces[$i];
          require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/gestion_capteurs.php");
        }
        require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/formulaire_piece.php");
        if(!empty($_POST['nomPiece'])){
          $rep=set_room($bdd,$_POST['nomPiece'],$idh['idHouse'])->fetch();
          header('Location: gestion_capteurs.php');
        }
        ?>

    </ul>

    </body>

</html>
</div>
<?php
include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/footer.php");
 ?>
