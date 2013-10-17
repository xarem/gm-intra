<!-- MySQL Connect für Anlass-Anzeige -->
<?php 
include("mysql.php");

$abfrage = "SELECT * FROM Events WHERE enddate >= CURDATE() ORDER BY startdate ASC";
mysql_query('SET NAMES "utf8"'); 
$ergebnis = mysql_query($abfrage);  
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
                <span class="m_title">GM Intra :: Kalender</span>
        </div>
        <div class="m_bar" align ="center">
                <?php include("navigation.php"); ?>
        </div>
        <div class="m_content">
                <div align="center">
                        <h3 class="m_content">Nächste Anlässe</h3>
                        <br />
                        <?php while($row = mysql_fetch_array($ergebnis)){
                                setlocale (LC_ALL, 'de_DE.UTF-8');
                                $oldSD = $row['startdate'];
                                $newSD = strftime("%a, %e. %b %Y", strtotime($oldSD));
                                $oldED = $row['enddate'];
                                $newED = strftime("%a, %e. %b %Y", strtotime($oldED));
                                echo "<table border='1' cellpadding='2' cellspacing='0' width='500px'>";
                                echo "<tr><td colspan='4'><h4>" . $row['titel'] . "</h4></td></tr>";
                                echo "<tr><td width='40px'>Von:</td><td width='180px'>" . $newSD . "</td><td width='86px'>Bis:</td><td>" . $newED . "</td></tr>";
                                echo "<tr><td>Ort:</td><td>" . $row['ort'] . "</td><td>Kategorie:</td><td>" . $row['kategorie'] . "</td></tr>";
                            echo "<tr><td colspan='4'>" . $row['descr'] . "</td></tr>";
                                echo "<tr><td colspan='4'><a href='" . $row['link'] . "'>abmelden</a></td></tr></table>";
                                echo "<br />";
                                }
                        ?>        
                </div>
        </div>
</body>
</html>