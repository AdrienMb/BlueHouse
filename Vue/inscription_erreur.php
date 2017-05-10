<?php
    ob_start();
    ?>
        <fieldset>
            <form method="POST" action="index.php?cible=verif">
              Nom
              <br/>
              <input type="text" name="lastName"/>
              <br/>
              Prénom
              <br/>
              <input type="text" name="firstName"/>
              <br/>
              Sexe
              <br/>
              <input type="int" name="sexe"/>
              <br/>
              Numéro de téléphone
              <br/>
              <input type="int" name="phoneNumber"/>
              <br/>
              Email
              <br/>
              <input type="text" name="email"/>
              <br/>
              Mot de passe
              <br/>
              <input type="text" name="password"/>
              <br/>
              Date d'anniversaire
              <br/>
              <input type="date" name="dateOfBirth" value="<?php echo date('Y-m-d'); ?>"/>
              <br/>
              Id de la maison
              <br/>
              <input type="text" name="idHouse"/>
              <br/>

                <input type='submit'/>
            </form>
        </fieldset>
    <?php
    $menu = ob_get_clean();
    $contenu = "<h2>Erreur dans le formulaire de connexion</h2>".$erreur;
    

    include 'gabarit.php';
?>
