<?php
    ob_start();
    $menu = formulaire();
    $contenu = "Erreur dans le formulaire de d'inscription: ".$erreur;
    ?>

<?php
    echo "<a style='color:red;'>".$contenu."</a>";
?>
<?php
    include  ($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/gabarit.php');
?>
