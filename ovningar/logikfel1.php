<?php

# Koden ska skriva ut alla män som är äldre än 35
# Men nu kommer massa andra personer med också. Varför?

$people = array(
	array('name' => 'Erik', 'age' => 35, 'gender' => 'male'),
	array('name' => 'Lisa', 'age' => 41, 'gender' => 'female'),
	array('name' => 'Anders', 'age' => 19, 'gender' => 'male'),
	array('name' => 'Berit', 'age' => 76, 'gender' => 'female'),
	array('name' => 'Stina', 'age' => 11, 'gender' => 'female'),
	array('name' => 'Nils', 'age' => 55, 'gender' => 'male')
);


foreach($people as $person){
	if($person['age'] > 35 || $person['gender'] === 'male'){
		echo $person['name']." är äldre än 35 och man.<br>";
	}
}