<?php
session_start(); ?>
<link rel="stylesheet" type="text/css" href="../Styles/style.css" />
<link rel="stylesheet" type="text/css" href="../Styles/flexbox.css" />
<link rel="stylesheet" type="text/css" href="../Styles/fond.css" />
<link rel="stylesheet" type="text/css" href="/github/bluehouse/Styles/accueiladmin.css" />
<?php
  require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/header.php');
  require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Modele/house.php');
  require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Modele/user.php');
  ?>
<html>
<head>
  <title>Accueil</title>
</head>
<body>
  <div class="accueil">
  <p>
    <?php
    $id = $_SESSION['userID'];
    $rep_house = get_idHouse($bdd,$id)->fetch();
    $id_house = $rep_house['idHouse'];
    $rep_owner = get_idOwner($bdd,$id_house)->fetch();
    if($id == $rep_owner['idOwner']){
      ?>
      <h1> Vous êtes l'administrateur </h1>
      <div class="cadre">
      <?php
      $rep_user = get_idUsers($bdd,$id_house)->fetch();
      $str_user = $rep_user['idUsers'];
      $tab_user = explode(" ",$str_user);
      foreach($tab_user as $value){
        $infos = get_nameSexeUsingId($bdd,$value)->fetch();
        ?>
        <div class="Nom">
        <?php
        echo $infos['lastName']." ";
        echo $infos['firstName'];
        ?>
      </div>
        <?php
      }
      ?>
    </div>
      <?php
    }
    require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/footer.php');
    ?>

</p>
</div>
</body>
</html>
