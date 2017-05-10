<div class="fondForm">
<?php
function connexion(){
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
<?php
}

// Génère le code HTML du formulaire de connexion
function formulaire(){
    ob_start();
    ?><div class="formulaire1">
      <h3> Inscrivez-vous !</h3>
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
      </div>
    <?php
    $formulaire = ob_get_clean();
    return $formulaire;
}
function getInput(){
  $tab=array($_POST['lastName'], $_POST['firstName'], $_POST['sexe'], $_POST['phoneNumber'], $_POST['email'], $_POST['password'], $_POST['dateOfBirth'], $_POST['idHouse']);
  return $tab;
}
// Génère le code HTML de l'entête
/*
function entete($titre){
    ob_start();
    ?>
        <h1>
            <?php echo($titre);?>
        </h1>
    <?php
    $entete = ob_get_clean();
    return $entete;
}
// Génère le code HTML du menu
// le lien associé à l'étape courante est mis en couleur //<input type="int" name="insexe" value="0" id="oui"  /> <label for="oui">Homme</label>
//<input type="int" name="insexe" value="1" id="non" /> <label for="non">Femme</label>**/
/*
function menu($etape){
    ob_start();
    ?>
        <h2>Navigation</h2>
        <br/>
        <ul>
            <?php
                if($etape=="accueil"){
                    echo('<li><a href="index.php?cible=accueil"><span class="selection">Accueil</span></a></li>');
                } else {
                    echo('<li><a href="index.php?cible=accueil">Accueil</a></li>');
                }

                for($i=1;$i<4;$i++){
                    if($etape=="etape".$i){
                        echo('<li><a href="index.php?cible=etape'.$i.'"><span class="selection">Étape '.$i.'</span></a></li>');
                    } else {
                        echo('<li><a href="index.php?cible=etape'.$i.'">Étape '.$i.'</a></li>');
                    }
                }
                echo '<br/><li><a href="index.php?cible=deconnexion">Deconnexion</a></li>';
            ?>
        </ul>
    <?php
    $menu = ob_get_clean();
    return $menu;
}
// Génère le code HTML du pied de page
// même code pour toutes les pages
function pied(){
    ob_start();
    ?>
        <span style="font-style:italic;">Pied de page</span>
    <?php
    $pied = ob_get_clean();
    return $pied;
}*/
?>
</div>
