<!--
<?php 
include 'login.php'
?> 
-->
<!-- MySQL Connect für Anlass-Anzeige -->
<?php 
include("mysql.php");

  
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>GM Intra :: Event Erfassen</title>
<link rel="stylesheet" type="text/css" media="all" href="style.css">
</head>
<body>
	<div class="m_title" align="center">
		<span class="m_title">GM Intra :: Event Erfassen</span>
	</div>
	<div class="m_bar" align ="center">
		<?php include("navigation.php") ?>
	</div>
	<div class="m_content">
		<div id="form" align="center">
			<form action="xxx" method="POST">
				<table border="0" width="250" cellpadding="0" cellspacing="0">
					<tr>
						<td>Titel:</td>
						<td><input type="text" name="titel" /></td>
					</tr>
					<tr>
						<td>Vom:</td>
						<td><input type="text" name="von" /></td>
					</tr>
					<tr>
						<td>Bis:</td>
						<td><input type="text" name="bis" /></td>
					</tr>
					<tr>
						<td>Ort:</td>
						<td><input type="text" name="ort" /></td>
					</tr>
					<tr>
						<td>Kategorie:</td>
						<td><input type="text" name="kat" /></td>
					</tr>
					<tr>
						<td>Beschreibung:</td>
						<td><textarea name="desc" cols="25" rows="4"></textarea></td>
					</tr>
					<tr>
						<td>Ufbietblatt:</td>
						<td><input name="file" type="file" size="50" accept="application/pdf" /></td>
					</tr>
					
				</table>
				<br />
			 	<input name="submit" type="submit" value="Login">
			</form>		
		</div>	
		
	</div>
</body>
</html>