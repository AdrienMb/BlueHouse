<div class="fondForm">
<?php
function connexion(){
  ob_start();
  ?>
  <fieldset>
      <form method="POST" action="/github/bluehouse/index.php?cible=veriff">
        <ul class ="ul">
          <li class ="li"><input type="text" name="identifiant"  value="email" onclick='javascript:this.value = "";' /></li>
          <li class ="li"><input type="password" name="mdp" value="Mot de passe" onclick='javascript:this.value = "";this.type="password"' /></li>

          <input type='submit'/>
        </ul>
      </form>
<?php
$connexion = ob_get_clean();
return $connexion;
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
                <input type="radio" name="sexe" value="0"/>Homme
                <input type="radio" name="sexe" value="1"/>Femme
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
                <input type="password" name="password"/>
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
}?>
<?php
function getInput(){
  $tab=array($_POST['lastName'], $_POST['firstName'], $_POST['sexe'], $_POST['phoneNumber'], $_POST['email'], $_POST['password'], $_POST['dateOfBirth'], $_POST['idHouse']);
  return $tab;
}
function message_writing(){
   ob_start();
   ?><div class="formulaire_message">
     <br/>
    <br/>
     <br/>
     <br/>
     <br/>
     <br/>
       <fieldset>
           <form method="POST" action="/github/bluehouse/Controleur/message.php">
               <input type="text" name="title" value="Votre titre..." onclick="this.value='';"/>
               <br/>
               <TEXTAREA name="message" rows=4 cols=40 onclick="this.value='';">Votre message...</TEXTAREA>
               <br/>
               <input type='submit'/>
           </form>
       </fieldset>
     </div>
   <?php
  $message_writing = ob_get_clean();
   return $message_writing;
  }
  ?>
</div>
