<?php
$bdd='cloud_next800';
$bdd_serveur='localhost';
$bdd_login='bot@cloud.simonquasar.net';
$bdd_mdp='SLSZpjcJ16LT8HU';
echo "<br><br>CLEANING ALL LOCK FILES...";
$aVar = mysqli_connect($bdd_serveur,$bdd_login,$bdd_mdp,$bdd);
$query1 = mysqli_query($aVar, "DELETE FROM `".$bdd."`.`oc_file_locks` WHERE `oc_file_locks`.`lock` != 0") or die('Errrorr SQL !<br>'.$sql.'<br>'.mysqli_error());
echo "<br>Cleaning done without errors";
?>