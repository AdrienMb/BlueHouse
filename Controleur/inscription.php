<?php
    // Controleur pour gérer le formulaire de connexion des utilisateurs

    if(isset($_GET['cible']) && $_GET['cible']=="verif") { // L'utilisateur vient de valider le formulaire de connexion

      $tab=getInput();
      //  if(!empty($_POST['lastName']) && !empty($_POST['firstName'])){ // L'utilisateur a rempli tous les champs du formulaire
            include("Modele/utilisateurs.php");
            include("Modele/user.php");

            $reponse = emailUnique($bdd,$_POST['email']);
            if($reponse->rowcount()==0){  // Email unique, on affiche la page
                entree_bdd($bdd,$tab);
                $rep = get_id($bdd,$_POST['email']);
                $ligne = $rep->fetch();
                $_SESSION["userID"] = $ligne['id'];
                header('Location: Controleur/accueil.php');
                exit();
            }
            else { // Email déjà utilisé
              $erreur = "Adresse mail déjà utilisé";
              include("Vue/inscription_erreur.php");
            }
        //}
        /*  else { // L'utilisateur n'a pas rempli tous les champs du formulaire
            $erreur = "Veuillez remplir tous les champs :-)";
            include("Vue/connexion_erreur.php");
        }*/
    }
    else { // La page de connexion par défaut
        include("Vue/non_connecte.php");
    }
?>
