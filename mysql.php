<?php
$verbindung = mysql_connect("guggemot.mysql.db.internal", "guggemot_intra" , "d4rCfUjr") 
or die("Verbindung zur Datenbank konnte nicht hergestellt werden"); 
mysql_select_db("guggemot_intra") or die ("Datenbank konnte nicht ausgewählt werden");
?>