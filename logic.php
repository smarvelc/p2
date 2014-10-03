<?php 
/* Here's an array of words that the password generator will randomly select from */
$word_list = Array(
	0 => 'Horse',
	1 => 'Cow',
	2 => 'Serf',
	3 => 'Onion',
	4 => 'Bottle',
	5 => 'Flamingo',
	6 => 'Lamp',
	7 => 'Partition',
	8 => 'Hat',
	9 => 'Lobby',
	10 => 'Coffee',
	11 => 'Number',
	12 => 'Brain',
	13 => 'Bird',
	14 => 'Vestibule',
	15 => 'Escalator',
	16 => 'Money',
	17 => 'Earthworm',
	18 => 'Mead',
	19 => 'City',
	20 => 'Question',
	);

$test = $_GET["wordcount"];

if($test==0){
	echo("It looks like you didn't enter any words, or put zero. You need at least one word for a password.");
}
else if($test>=10){
	echo("Ten or more words is too many! Sorry about that. You probably wouldn't want to memorize ten+ words though anyway...");
}
else if($test<=9){
	for($i=1; $i<=$test; $i++){
	echo($word_list[rand(0,20)]." ");
}
}
/*foreach($_GET as $key => $value){
	echo($value);
}*/
