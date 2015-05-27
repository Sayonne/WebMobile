<?php

session_start();
$depart = $_REQUEST['depart'];
$offre = $_REQUEST['offre'];
$jour = $_REQUEST['jour'];
$heure = $_REQUEST['heure'];
$minute = $_REQUEST['minute'];
$lieu = $_REQUEST['lieu'];
$date = $_REQUEST['date'];
$points = $_REQUEST['point'];

echo "Depart : $depart
Offre : $offre
Jour : $jour
Heure : {$heure}h$minute
Date : $date
Lieu : $lieu
Nombre de points de ramassage : ".count($points);
