<!DOCTYPE html>

<html>
<head>
<title>Blocks iteration</title>

<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h3>Blocks : farbige divs</h3>
<p>
	<form method="post" action="aufgabe.php">
		<label for="anzahl">Wieviele Flächen hätten's denn gern?</label>
		<input type="text" name="anzahl" id="anzahl"><input type="submit" value="Gib's mir!">
	</form>
</p>
<hr>

<?php
if(isset($_POST['anzahl']))
{
	$anzahl = $_POST['anzahl'];
	for ($i=1;$i<=$anzahl;$i++)
	{
		echo "<div>" . $i . "</div>";
	}
}
?>
</body>
</html>
