<?php
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/formulaire_inscription.php");
require($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/modele/house.php");

    // Controleur pour gérer le formulaire de connexion des utilisateurs
    if(isset($_GET['cible']) && $_GET['cible']=="verif") { // L'utilisateur vient de valider le formulaire de connexion
      $testHouse=verifyPd($bdd,$_POST['idHouse'],$_POST['passwordHouse']);
      $tab=getInput();
      if($_POST['password']!=$_POST['password_2'] || $testHouse){
        $erreur = "mot de passe non valide";
        include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/inscription_erreur.php");
      }
      else{
      //  if(!empty($_POST['lastName']) && !empty($_POST['firstName'])){ // L'utilisateur a rempli tous les champs du formulair
            include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Modele/user.php");
            if(validEmail($_POST['email'])){
              $reponse = emailUnique($bdd,$_POST['email']);
              if($reponse->rowcount()==0){  // Email unique, on affiche la page
                  entree_bdd($bdd,$tab);
                  $rep = get_id($bdd,$_POST['email']);
                  $ligne = $rep->fetch();
                  $_SESSION["userID"] = $ligne['id'];
                  $rep2 = get_idUsers($bdd,$_POST['idHouse']);
                  if($rep2->rowcount()!=0){
                    connectNewUser($bdd, $ligne['id'], $_POST['idHouse']);
                  }
                  echo '<script language="Javascript">
<!--
document.location.replace("controleur/accueil.php");
// -->
</script>';
                  exit();
              }
              else { // Email déjà utilisé
                $erreur = "Adresse mail déjà utilisé";
                include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/inscription_erreur.php");
              }
            }
            else{
              $erreur = "Adresse mail non valide";
              include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/inscription_erreur.php");
            }
        //}
        /*  else { // L'utilisateur n'a pas rempli tous les champs du formulaire
            $erreur = "Veuillez remplir tous les champs :-)";
            include("Vue/connexion_erreur.php");
        }*/
    }
  }
    else { // La page de connexion par défaut
        include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/non_connecte.php");
    }

function validEmail($email)
{
    $isValid = true;
    $atIndex = strrpos($email, "@");
    if (is_bool($atIndex) && !$atIndex)
    {
        $isValid = false;
    }
    else
    {
        $domain = substr($email, $atIndex+1);
        $local = substr($email, 0, $atIndex);
        $localLen = strlen($local);
        $domainLen = strlen($domain);
        if ($localLen < 1 || $localLen > 64)
        {
            // local part length exceeded
            $isValid = false;
        }
        else if ($domainLen < 1 || $domainLen > 255)
        {
            // domain part length exceeded
            $isValid = false;
        }
        else if ($local[0] == '.' || $local[$localLen-1] == '.')
        {
            // local part starts or ends with '.'
            $isValid = false;
        }
        else if (preg_match('/\\.\\./', $local))
        {
            // local part has two consecutive dots
            $isValid = false;
        }
        else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
        {
            // character not valid in domain part
            $isValid = false;
        }
        else if (preg_match('/\\.\\./', $domain))
        {
            // domain part has two consecutive dots
            $isValid = false;
        }
        else if (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\","",$local)))
        {
            // character not valid in local part unless
            // local part is quoted
            if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\","",$local)))
            {
                $isValid = false;
            }
        }
        if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A")))
        {
            // domain not found in DNS
            $isValid = false;
        }
    }
    return $isValid;
}
?>
