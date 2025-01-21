<?php

include 'app/connect.php';

$sid= $_GET['sid'];
if (!isset($_POST['submit']))
{
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="edit.php">
		<h1><?php $sid?></h1>
		<table>
			<tr>
				<td>Enter the student name </td>
				<td><input type="text" name="sid">
			</tr>

		</table>
	</form>
</body>
</html>
<?php
}
?>