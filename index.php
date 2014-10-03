<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset='utf-8'>
	<title>P2</title>
	<?php require('logic.php'); ?>
</head>
<body>
	<div id="outer">
	</div>
	<div id="header">
		<h1>Project 2: XKCD Password Generator</h1>
	</div>
	<div id="password">
	</div>
	<br>
	<br>
	<div id="form">
	<form method='GET' action='index.php'>
		Choose the number of words you'd like in your password. (Max 9)<br>
		<input type="text" name="wordcount"><br>
		Would you like a number?<br>
		<input type="checkbox" name="number" value="Yes">Yes<br>
		Would you like a symbol?<br>
		<input type="checkbox" name="symbol" value="Yes">Yes<br>
		<input type="submit" value="Generate Password">
		<?php print_r($_GET); ?>
	</form>	
	</div>
	<div id="xkcdimage">
	</div>
</body>	

</html>