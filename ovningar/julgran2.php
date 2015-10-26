<?php

echo "<pre>";
for($row=1; $row<=9; $row++){

// Lösning 1 på mellanslag
	for($b=0; $b<=9-$row;$b++){
		echo " ";
	}

// Lösning 2 på mellanslag
/*
	for($b=9; $b>$row;$b--){
		echo " ";
	}
*/
	for($i=1; $i<=$row*2-1; $i++){
		echo "*";
	}
	echo "<br>";

}
echo "</pre>";