<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../Styles/style.css" />
<link rel="stylesheet" type="text/css" href="../Styles/flexbox.css" />
<html>
<head>
  <title>Accueil</title>
</head>
<body>
  <div class="accueil">
  <p>
    <?php
    session_start();
    require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/header.php');
    echo "vous êtes connecté";
    $id = $_SESSION['userID'];
    require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/footer.php');
    ?>

</form>
</div>
</body>
</html>
