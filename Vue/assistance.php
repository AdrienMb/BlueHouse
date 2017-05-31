<!DOCTYPE html>
<LINK href="/github/bluehouse/Styles/assistance.css" rel="stylesheet" type="text/css">
  <?php
  require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/header.php');
?>
<html>

    <head>

        <meta charset="utf-8" />

        <title>Assistance</title>

    </head>


    <body>
      <div class="fondAssistance">
        <div class="contact">
    <h1> Assistance </h1>
    <h2> Un message à nous transmettre ? </h2>
<div class="message">
    <form action="/github/bluehouse/Vue/assistance.php" method="post">

    <div>

        <input type="text" id="nom" placeholder="Nom"name ="nom"/>
    </div>
    <div>

        <input type="email" id="courriel" placeholder="Email" name ="courriel"/>
    </div>
    <div>

        <textarea id="message" placeholder="Votre message..."name="message"></textarea>
    </div>
    <div class="button">
        <input type="submit">
    </div>

</form>
</div></div>
<div class="faq">
     <h1> F.A.Q </h1></br>




     <B>Comment faire en cas de panne de courant ? </B> <br/>
     <p> <B>Un onduleur</B> pour prévenir les pannes de courant ! <br/>Ce dispositif très simple permet de protéger les appareils électroniques des pannes en basculant sur une petite batterie de secours en quelques microsecondes.Celle-ci emmagasine assez d’énergie pour faire tenir un appareil une dizaine de minutes après une panne.</p><br/>
     <B>Une alarme</B> SMS pour détecter les pannes de courant ! <br/>
     À l’aide d’un simple boîtier fixé sur vos installations, vous pouvez être prévenu(e) d’une coupure de courant via SMS, quel que soit l'endroit où vous vous trouvez.Si vous êtes en déplacement vous avez ainsi la possibilité de contacter vos proches et de les informer du problème afin qu’ils s’en occupent.<br/>
</br>
     <B><i>Quel système de sécurité installer pour mes enfants ?</i></B><br/><p><p> <B>Les détecteurs</B> de fumée et de gaz. <br/>
     Un détecteur autonome de fumée relié à un système d’alerte dans les chambres des enfants, et des parents, peut sauver un nombre important de vies lorsqu’on sait que la plupart des incendies se déclarent la nuit.</p><br/>
     <p><B>Protéger</B> l’accès aux endroits sensibles de la maison <br/>
     Dans une propriété, la piscine est souvent une source d’angoisse pour les parents.Le contrôle visuel à distance, le contrôle des accès, leadétection de présence et/ou de mouvement dans l’eau, sont autant de solutions qui permettent de mieux protéger ses enfants.De la même manière, il est possible de restreindre l’accès à certaines pièces de la maison à ses enfants. Les systèmes domotiques les plus sophistiqués peuvent ainsi proposer une reconnaissance digitale pour l’ouverture d’une porte.</p><br/>

     <B/><i>Quels sont les nouveaux systèmes auxquels nous pouvons nous attendre très prochainement?</i></B> <br/>

     <p><B>Les commandes vocales ou gestuelles</B>, <B>la géolocalisation</B>, les <B>étiquettes NFC</B> ou les <B>i-Beacon</B> font partie des technologies qui progressent actuellement et qui vont peut être changer notre façon de réaliser certaines taches de tous les jours.</p><br/>

     <B><i>Qu’est-ce qu’un scénario, une scène ou une règle?</B></i><br/>
     <p>En fonction du fabriquant de matériel on peut l’appeler scène, règle ou bien scénario… c’est une <B>situation prédéfinie</B>,  qui va entraîner un enchaînement d’action. Cela permet de remplacer un certain nombre de gestes quotidiens et fastidieux par une seule action. Par exemple, il suffit d’appuyer sur un simple interrupteur en partant de chez soi, pour éteindre toutes les lumières, activer le système d’alarme, baisser les volets roulants, ouvrir le portail etc….</p>

      <B><i> L'installation est-elle longue?</B></i><br/>
      <p>Une programmation et une supervision ne se font qu'en <B>une journée</B> grâce au savoir-faire de BlueHouse. L'installation des composants se fait en parallèle de l'installation électrique, ou de la rénovation. Elle dure donc le même laps de temps que celle-ci.</p>



     </div>
     <?php
     require($_SERVER["DOCUMENT_ROOT"].'/github/bluehouse/Vue/footer.php');
     ?>
   </div>
     </body>

</html>

<?php
if(!empty($_POST['nom']) && !empty($_POST['message']) && !empty($_POST['courriel'])){
?>  <script> alert("Message envoyé"); </script> <?php
    header('Location: assistance.php');
    exit();
}
 ?>
