<?php
  if(isset($_GET['cible']) && $_GET['cible']=="verif"){
  $fermer=checked;
  }
else{
  $fermer = unchecked;
}
    include($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/VueGenerale.php');
 ?>
