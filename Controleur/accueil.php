<!DOCTYPE html>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../Styles/style.css" />
<html>
<head>
  <title>Accueil</title>
</head>
<body>
  <p>
    <?php
    session_start();
    require("../Vue/header.php");
    echo "vous êtes connecté";
    $id = $_SESSION['userID'];
    echo ".$id.";
    require("../Vue/footer.php");
    ?>

</form>
</body>
</html>
