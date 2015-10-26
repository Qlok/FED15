<?php
session_start();


$username = "tobias";
$password = "test";

if(isset($_POST['username']) && $_POST['username'] == $username 
	&& $_POST['password'] == $password){

	$_SESSION['loggedin'] = TRUE;

}elseif(isset($_POST['username'])){
	echo "Fel användarnamn eller lösenord!";
}

if(isset($_SESSION['loggedin']) 
	&& $_SESSION['loggedin'] == TRUE){
	echo "Du är inloggad!";
}else{
	echo "
		<form action='' method='post'>
			<input type='text' name='username'>
			<input type='password' name='password'>
			<input type='submit'>
		</form>
	";
}
