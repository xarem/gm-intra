<!--
<?php 
include 'login.php'
?> 
-->
<!-- MySQL Connect für Anlass-Anzeige -->
<?php 
$verbindung = mysql_connect("guggemot.mysql.db.internal", "guggemot_intra" , "d4rCfUjr") 
or die("Verbindung zur Datenbank konnte nicht hergestellt werden"); 
mysql_select_db("guggemot_intra") or die ("Datenbank konnte nicht ausgewählt werden"); 


$abfrage = "SELECT * FROM Events"; 
$ergebnis = mysql_query($abfrage); 
$row = mysql_fetch_array($ergebnis); 
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>GM Intra :: Kalender</title>
<link rel="stylesheet" type="text/css" media="all" href="style.css">
</head>
<body>
	<div class="m_title" align="center">
		<span class="m_title">GM Intra :: Anlass&uuml;bersicht</span>
	</div>
	<div class="m_bar" align ="center">
		<a href="#data" class="m_bar">Daten ändern</a>
		<a href="#logout" class="m_bar">Ausloggen</a>
	</div>
	<div class="m_content">
		<h3 class="m_content">Nächste Anlässe</h3>
		
		<?php while($row = mysql_fetch_array($result)){
			echo "<table><tr><td>Von:</td><td>" . $row['startdate'] . "</td><td>Bis:</td><td>" . $row['enddate'] . "</td></tr>";
			echo "<tr><td colspan="4"><h4>" . $row['titel'] . "</h4></td></tr>";
			echo "<tr><td>Ort:</td><td>" . $row['ort'] . "</td><td>Kategorie:</td><td>" . $row['kategorie'] . "</td></tr>";
		    echo "<tr><td colspan="4">" . $row['descr'] . "</td></tr></table>";
			echo "<br />"; 
			}
		?>	
		
	</div>
</body>
</html>