<div class="fondForm">
<?php
function connexion(){
  ob_start();
  ?>
  <fieldset>
      <form method="POST" action="/github/bluehouse/index.php?cible=veriff">
        <ul class ="ul">
          <li class ="li"><input type="text" name="identifiant"  placeholder="email" /></li>
          <li class ="li"><input type="password" name="mdp" placeholder="Mot de passe" onclick='javascript:this.type="password"' /></li>

          <input type='submit'/>
        </ul>
      </form>
<?php
$connexion = ob_get_clean();
return $connexion;
}
?>

<?php

function message_writing(){
   ob_start();
   ?><div class="formulaire_message">
     <br/>
    <br/>
       <fieldset>
           <form method="POST" action="/github/bluehouse/Controleur/message.php">
               <input type="text" name="title" placeholder="Votre titre..."/>
               <br/>
               <TEXTAREA name="message" rows=4 cols=40 placeholder="Votre message..."></TEXTAREA>
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
