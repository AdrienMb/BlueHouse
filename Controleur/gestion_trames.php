<?php
require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Modele/connexion.php');
require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Modele/dataSensor.php');
require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Modele/nbtrame.php');
$ch = curl_init();
curl_setopt(
$ch,
CURLOPT_URL,
"http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=6B6B");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$data = curl_exec($ch);
curl_close($ch);
$data_tab = str_split($data,33);
$lastDate = get_lastDate($bdd)->fetch();
for($i=0, $size=count($data_tab); $i<$size; $i++){
$string = $data_tab[$i];
if(strlen($string) == 33){
$typeTrame = $string[0];
$group = $string[1].$string[2].$string[3].$string[4];
$request = $string[5];
$typeSensor = $string[6];
$numSensor = $string[7].$string[8];
$valueSensor = $string[9].$string[10].$string[11].$string[12];
$tramNumber = $string[13].$string[14].$string[15].$string[16];
$checksum = $string[17].$string[18];
$dateTrame= substr($string,19);
$type = "";
switch ($typeSensor) {
    case 1:
        $type = "distance";
        break;
    case 2:
        $type = "distance";
        break;
    case 3:
        $type = "temperature";
        break;
    case 4:
        $type = "humidite";
        break;
    case 5:
        $type = "lumiere";
        break;
    case 6:
        $type = "temperature";
        break;
    case 7:
        $type = "couleur";
        break;
    case 8:
        $type = "presence";
        break;
    case 9:
        $type = "lumiere";
        break;
    case 10:
        $type = "mouvement";
        break;
    case 11:
        $type = "presence son";
        break;
}
$receptionDate = $dateTrame[0].$dateTrame[1].$dateTrame[2].$dateTrame[3]."-".$dateTrame[4].$dateTrame[5]."-".$dateTrame[6].$dateTrame[7]." ".$dateTrame[8].$dateTrame[9].":".$dateTrame[9].$dateTrame[10];
$receptionDate = $receptionDate.":".$dateTrame[11].$dateTrame[12];
if($receptionDate > $lastDate['max(receptionDate)']){
  set_trame($bdd,$numSensor,$type,$receptionDate,$valueSensor);
}
}
}
?>
