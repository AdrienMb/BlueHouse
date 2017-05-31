<script src="/github/bluehouse/Vue/formulaire_inscription.js" type="text/javascript"></script>

<?php
function formulaire(){
    ob_start();
    ?><div class="formulaire1">
      <h3> Inscrivez-vous !</h3>
        <fieldset>
            <form method="POST" action="index.php?cible=verif"  onsubmit="return verifForm(this)">
                Nom
                <br/>
                <input type="text" name="lastName" onblur="verifChamp(this)" />
                <br/>
                Prénom
                <br/>
                <input type="text" name="firstName" onblur="verifChamp(this)"/>
                <br/>
                Sexe
                <br/>
                <input type="radio" name="sexe" value="0"/>Homme
                <input type="radio" name="sexe" value="1" checked="checked"/>Femme
                <br/>
                Numéro de téléphone
                <br/>
                <input type="text" name="phoneNumber" onblur="verifTel(this)"/>
                <br/>
                Email
                <br/>
                <input type="text" name="email" onblur="verifMail(this)"/>
                <br/>
                Mot de passe
                <br/>
                <input type="password" name="password" nblur="verifChamp(this)"/>
                <br/>
                Valider le mdp
                <br/>
                <input type="password" name="password2" nblur="verifChamp(this)"/>
                <br/>
                Date d'anniversaire
                <br/>
                <input type="date" name="dateOfBirth" value="<?php echo date('Y-m-d'); ?>"/>
                <br/>
                Id de la maison <a href="#" class="info"><div class="cercle"><div class="infoq">?</div></div><span>Code reçu lors de la commande</span></a>
                <br/>
                <input type="text" name="idHouse" onblur="verifChamp(this)"/>
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


?>
