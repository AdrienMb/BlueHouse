<?php
    // Controleur pour gérer le formulaire de connexion des utilisateurs

    if(isset($_GET['cible']) && $_GET['cible']=="veriff") { // L'utilisateur vient de valider le formulaire de connexion
        if(!empty($_POST['identifiant']) && !empty($_POST['mdp'])){ // L'utilisateur a rempli tous les champs du formulaire
            include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Modele/user.php");
            $reponse = getnbPassword($bdd,$_POST['identifiant']);
            $ligne=$reponse->fetch();

            if($ligne['ct']==0){  // L'utilisateur n'a pas été trouvé dans la base de données
                $erreur = "Utilisateur inconnu";
                include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/connexion_erreur.php");
            } else { // utilisateur trouvé dans la base de données
                $reponse = get_password($bdd,$_POST['identifiant']);
                $ligne = $reponse->fetch();
                if(($_POST['mdp'])!=$ligne['password']){ // Le mot de passe entré ne correspond pas à celui stocké dans la base de données
                    $erreur = "Mot de passe incorrect";
                    include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/connexion_erreur.php");
                } else { // mot de passe correct, on affiche la page d'accueil
                    $_SESSION["userID"] = $ligne['id'];
                    header('Location: /github/bluehouse/Controleur/accueil.php');
                    exit();
                }
            }
        } else { // L'utilisateur n'a pas rempli tous les champs du formulaire
            $erreur = "Veuillez remplir tous les champs";
            include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/connexion_erreur.php");
        }
    } else { // La page de connexion par défaut
    include($_SERVER["DOCUMENT_ROOT"]."/github/bluehouse/Vue/non_connecte_connexion.php");
    }
?>
