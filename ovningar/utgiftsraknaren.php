<?php

$utgifter = array(45,89,17,67);

$summa = 0;

foreach($utgifter as $utgift){
	$summa += $utgift;
}

//echo $summa."<br>";


# AVANCERAD UTGIFTSRÄKNARE
$utgifter = array(
	'januari' => array(78,89,17,67),
	'februari' => array(45,89,17,67),
	'mars' => array(45,89,17,67),
	'april' => array(3245,11,44,67),
	'maj' => array(45,89,17,67),
	'juni' => array(45,289,17,67),
	'juli' => array(45,89,17,67),
	'augusti' => array(45,89,17,67),
	'september' => array(45,234,17,67),
	'oktober' => array(45,89,22,67),
	'november' => array(45,89,17,67),
	'december' => array(45,1123,17,44)
	);
$summa = 0;
foreach($utgifter as $month_name => $month){
	$month_sum = 0;
	
	foreach($month as $utgift){
		$month_sum += $utgift;
	}
	$summa += $month_sum;
	echo $month_name.": ".$month_sum."<br>";
}

echo "Hela året: ".$summa."<br>";











