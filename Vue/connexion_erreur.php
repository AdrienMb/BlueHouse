<?php
    ob_start();
    $menu = connexion();
    $contenu = "Erreur dans le formulaire de connexion: ".$erreur;
    ?>

<?php
    echo "<a style='color:red;'>".$contenu."</a>";
?>
<?php
    include  ($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/gabarit.php');
?>
