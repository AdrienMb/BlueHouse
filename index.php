<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<html>
<head>
  <title>Page d'accueil</title>
</head>
<body>
  <p>
    <?php
    session_start();
    require("Vue/header_deco.php");
    include("Controleur/inscription.php");
    require("Vue/footer.php");
  /* if(!isset($_SESSION["userID"])){ // L'utilisateur n'est pas connecté
        include("Controleur/inscription.php"); // On utilise un controleur secondaire pour éviter d'avoir un fichier index.php trop gros
    } else { // L'utilisateur est connecté*/
      /*  if(isset($_GET['cible'])) { // on regarde la page où il veut aller
            if($_GET['cible'] == 'accueil'){
                include("Vue/accueil.php");
            } else if ($_GET['cible'] == "etape1"){
                include("Modele/utilisateurs.php");
                $reponse = utilisateurs($db);
                include("Vue/etape1.php");
            } else if ($_GET['cible'] == "etape2"){
                include("Vue/etape2.php");
            } else if ($_GET['cible'] == "etape3"){
                include("Vue/etape3.php");
           } else if ($_GET['cible'] == "deconnexion"){
                // Détruit toutes les variables de session
                $_SESSION = array();
                if (isset($_COOKIE[session_name()])) {
                    setcookie(session_name(), '', time()-42000, '/');
                }
                session_destroy();
                include("Vue/non_connecte.php");
            }
        } else { // affichage par défaut
                include("Vue/accueil.php");
        }

    /**try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=bluehouse;charset=utf8','root','root');
      }
      catch(Exception $e)
      {
        die('Erreur :'.$e->getMessage());
      }
      ?>
  </p>
  <form action="index_post.php" method="post">
    <h2>Inscrivez vous !</h2>
    <p>
        On insèrera ici les éléments de notre formulaire.
    </p>
    <label for="firstName">Prénom</label> : <input type="tinytext" name="firstName" id="firstName" /><br/>
    <label for="lastName">Nom</label> :  <input type="tinytext" name="lastName" id="lastName" /><br/>
    <label for="sexe">Sexe</label> :  <input type="tinyint" name="sexe" id="sexe" /><br/>
    <label for="phonenumber">Numéro de téléphone</label> :  <input type="int" name="phonenumber" id="phonenumber" /><br/>
    <label for="email">Email</label> :  <input type="text" name="email" id="email" /><br/>

    <p>Avez vous une installation BlueHouse ?</p>
    <input type="radio" name="installation" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>

    <input type="radio" name="installation" value="non" id="non" /> <label for="non">Non</label>

    <script type="text/javascript">alert('Tg William')</script>**/
    ?>

</form>
</body>
</html>
