<?php
    include($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Modele/connexion.php');

    function get_messagesWithTitleAndIdAndDate($bdd,$id_house){
        $reponse = $bdd->query('SELECT data,title,idWriter,dateWrite FROM message WHERE idHouse="'.$id_house.'"');
        return $reponse;
    }

    function input_message($bdd, $idWriter, $title, $data, $idHouse){
      $req=$bdd->prepare('INSERT INTO message(idWriter, dateWrite,title, data, idHouse) VALUES(:idWriter,NOW(),:title,:data,:idHouse)');
      $req->execute(array(
	'idWriter' => $idWriter,
	'title' => $title,
	'data' => $data,
	'idHouse' => $idHouse));
  return $req;
    }

?>
