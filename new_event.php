<?php 
 
$layout_title='Event Erfassen';

function layout_navigation() echo {"<?php include("navigation.php"); ?>"};

function layout_content() echo {"
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
"};

require ("layout.php");

?>