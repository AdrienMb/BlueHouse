<?php
include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/header.php");
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/user.php");
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/room.php");
?>
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
          $id_pieces[] = $result['id'];
          $i = $i+1;
        }
        require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/intro_gestion_capteur.php");
        for($i; $i>=0; $i--)
        {
        	$nomPiece = $pieces[$i];
          $idpiece = $id_pieces[$i];
          require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/gestion_capteurs.php");
        }
        require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/formulaire_piece.php");
        if(!empty($_POST['nomPiece'])){
          $rep=set_room($bdd,$_POST['nomPiece'],$idh['idHouse'])->fetch();
          header('Location: gestion_capteurs.php');
        }

        if(!empty($_POST['delete'])){
          delete_room($bdd,$_POST['delete']);
          echo '<script language="Javascript">
        <!--
        document.location.replace("gestion_capteurs.php");
        // -->
        </script>';
        }

include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/fin_gestion_capteur.php");


include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/footer.php");
 ?>
