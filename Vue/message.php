<link rel="stylesheet" type="text/css" href="../Styles/contact.css" />
<title>Notes</title>
<div class="ul_li_message">
  <div class="infos">
  <?php
  echo $firstName .' '.$lastName.' '.$dateWrite. ' ' .'<br />';
  ?>
</div>
  <div class=<?php echo $typeMessage ?>>
  <?php
  echo '<div class="titreMessage">'.$title. '</div>';
	echo $data. '<br />';
  ?>
</div>
</div>
