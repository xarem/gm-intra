<?php 
session_start(); 
?> 

<?php 
$verbindung = mysql_connect("guggemot.mysql.db.internal", "guggemot_intra" , "d4rCfUjr") 
or die("Verbindung zur Datenbank konnte nicht hergestellt werden"); 
mysql_select_db("guggemot_intra") or die ("Datenbank konnte nicht ausgewählt werden"); 

$krz = $_POST["krz"]; 
$password = md5($_POST["pw"]); 

$abfrage = "SELECT krz, password FROM User WHERE krz LIKE '$krz' LIMIT 1"; 
$ergebnis = mysql_query($abfrage); 
$row = mysql_fetch_object($ergebnis); 

if($row->password == $password) 
    { 
    $_SESSION["krz"] = $krz; 
    echo "Login erfolgreich. <br> <a href=\"geheim.php\">Geschützer Bereich</a>"; 
    } 
else 
    { 
    echo "K&uuml;rzel und/oder Passwort waren falsch. <a href=\"javascript:history.back()\">zur&uuml;ck</a>"; 
    } 

?>