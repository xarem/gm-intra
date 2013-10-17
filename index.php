<?php 
 
$layout_title='Login';

$layout_content='
		<div id="form" align="center">
			<form action="main.php" method="POST">
				<table border="0" width="250" cellpadding="0" cellspacing="0">
					<tr>
						<td>Kürzel:</td>
						<td><input type="text" name="krz" /></td>
					</tr>
					<tr>
						<td>Passwort:</td>
						<td><input type="password" name="pw" /></td>
					</tr>
				</table>
				<br />
			 	<input name="submit" type="submit" value="Login">
			</form>		
		</div>
';

include ("layout.php");

?>


