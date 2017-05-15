<?php
    ob_start();
    ?>
        <fieldset>
            <form method="POST" action="index.php?cible=veriff">
                email
                <br/>
                <input type="text" name="identifiant"/>
                <br/>
                Mot de passe
                <br/>
                <input type="text" name="mdp"/>
                <br/>
                <input type='submit'/>
            </form>
        </fieldset>
    <?php
    $menu = ob_get_clean();
    $contenu = "<h2>Erreur dans le formulaire de connexion</h2>".$erreur;
    echo $contenu;
    include  ($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/gabarit.php');
?>
