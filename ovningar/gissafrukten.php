
<form action='' method='post'>
<input type='text' name='frukt' />
<input type='submit' />
</form>

<?php

$frukter = array('äpple','kiwi','banan');
$correct = FALSE;

foreach($frukter as $frukt){
	if($frukt == $_POST['frukt']){
		$correct = TRUE;	
	}
}

if($correct){
	echo "Rätt!";
}else{
	echo "FEL!";
}

?>