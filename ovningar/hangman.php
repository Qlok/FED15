<?php
session_start();

if(!isset($_SESSION['guesses']))
	$_SESSION['guesses'] = array();


if(isset($_POST['word'])){
	$_SESSION['word'] = $_POST['word'];
}


if(!isset($_SESSION['word'])){
	echo "
		<form action='' method='post'>
		<input type='text' name='word'>
		<input type='submit' value='Välj ord'>
		</form>
	";

	$_SESSION['lifes'] = 5;
	
}else{

	echo "
		<form action='' method='post'>
		<input type='text' name='guess' autofocus>
		<input type='submit' value='Gissa'>
		</form>
	";

	$word = $_SESSION['word'];

	if(isset($_POST['guess'])) 
		$guess = $_POST['guess'];
	else
		$guess = NULL;

	$position = strpos($word,$guess);

	if(isset($_POST['guess']) && $position !== false){

		$_SESSION['guesses'][$position] = $guess;

		echo "Du gissade rätt!<br>";

	}elseif(isset($_POST['guess'])){

		echo "Du gissade fel!<br> $guess finns inte i ordet!<br>";
		$_SESSION['lifes'] = $_SESSION['lifes'] - 1;

	}

	echo "Du har ".$_SESSION['lifes']." liv kvar.<br>";

	printWord($word, $_SESSION['guesses']);

	//print_r($_SESSION);

	if(strlen($word) == count($_SESSION['guesses'])){
		echo "Du vann!";
		resetGame();
	}elseif($_SESSION['lifes'] == 0){
		echo "Du förlorade!";
		resetGame();
	}

}


function resetGame(){
	unset($_SESSION['word']);
	unset($_SESSION['guesses']);
}


function printWord($word, $guesses){
	
	$length = strlen($word);

	for($i=0; $i <= $length-1; $i++){
		if(isset($guesses[$i])) echo $guesses[$i]." ";
		else echo "_ ";
	}
	echo "<br>";
}











