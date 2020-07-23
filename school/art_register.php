<?php
	include "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Art</title>
</head>
<body>
	<form action="art_register_try.php" method="post">
		<table align="center">
			<th colspan="2">Art Info</th>
			<tr>
				<td>
					Art ID
				</td>
				<td>
					<input type="text" name="txtArtid" required>
				</td>
			</tr>
			<tr>
				<td>
					Artist ID
				</td>
				<td>
					<input type="text" name="txtArtistid" required>
				</td>
			</tr>
			<tr>
				<td>
					Art Genre
				</td>
				<td>
					<input type="text" name="txtGenre" required>
				</td>
			</tr>
			<tr>
				<td>
					Art Price
				</td>
				<td>
					<input type="number" name="numPrice" required>
				</td>
			</tr>
			

			<tr>
				<td colspan="2" align="left">
					<input type="submit" value="Submit">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<?php
						if (isset($_GET["Message"])) {
							echo $_GET["Message"];
								
						}
					?>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>