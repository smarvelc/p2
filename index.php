<html>
<head>
	
	<meta charset='utf-8'>
	<title>P2</title>
	<link href="css/p2index.css" rel="stylesheet" type="text/css" media="screen"/>
	<?php require('logic.php'); ?>
</head>
<body>
	<div id="outer">
	<div id="wrapper">
	<div id="header">
		<h1>Project 2: XKCD Password Generator</h1>
	</div>
	<div id="password">
	<p><?php 
	/*Error Message if nothing is entered*/
	if($passwordcount==0){
	echo("It looks like you didn't ask for a number of words, or put zero. You need at least one word for a password.");
}
	/*Error Message if too many words are entered*/
else if($passwordcount>=10){
	echo("Ten or more words is too many! Sorry about that. You probably wouldn't want to memorize ten+ words though anyway...");
}
	/*Takes number entered and gathers same number of randomized words*/
else if($passwordcount<=9){
	for($i=1; $i<=$passwordcount; $i++){
	echo(" ".$word_list[rand(0,20)]);
}
	if($symbol=="Yes"){
		echo("@");
	}
	if($number=="Yes"){
		echo(rand(0,10));
	}

}
?>
	</p>
	</div>
	<br>
	<br>
	<div id="about">
		<p>Ever have trouble coming up with a password?</p>
		<p>Ever feel like it's a pain to try create a password that's difficult to break and still remember?</p>
		<p>Well, you're in luck! The creator of xkcd posits that it might be better to create passwords that 
		are difficult for a computer to break (ie: a long string of words with many different letters) as 
		opposed to something difficult for a human to break (a weird word with lots of symbols and punctuation). These passwords are 
		tricky for a computer to figure out, and easier to remember. Feel free randomly generate one! The source comic is also below.
		</p>
	</div>
	<div id="form">
	<h2> Make me a password!</h2>
	<form method='GET' action='index.php'>
		Choose the number of words you'd like in your password. (Max 9)<br>
		<input type="text" name="wordcount"><br>
		Would you like a number?<br>
		<input type="checkbox" name="number" value="Yes">Yes<br>
		Would you like a symbol?<br>
		<input type="checkbox" name="symbol" value="Yes">Yes<br>
		<input type="submit" value="Make me a password!">
	</form>	
	</div>
	<div id="xkcdimage">
	<h2>xkcd Comic</h2>
	<a href="http://xkcd.com/936/"><img alt="xkcd comic" class="comic" src="media/password_strength.png"/></a>
	</div>
	</div>
	</div>
</body>	

</html>