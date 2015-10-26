<?php

$class = array(
   'Erik' => array(
      'group' => 1,
      'gender' => 'male'
   ),
   'Lisa' => array(
      'group' => 2,
      'gender' => 'female'
   ),
   'Anders' => array(
      'group' => 1,
      'gender' => 'male'
   ),
   'Karl' => array(
      'group' => 3,
      'gender' => 'male'
   ),
   'Kim' => array(
      'group' => 3,
      'gender' => 'female'
   ),
   'Nina' => array(
      'group' => 2,
      'gender' => 'female'
   ),
   'Eva' => array(
      'group' => 4,
      'gender' => 'female'
   ),
   'Sven' => array(
      'group' => 4,
      'gender' => 'male'
   )
);


###
# 1. Skriv ut alla personerna i klasslistan och att göra alla tjejerna bold med exempelvis <b> eller <strong>.
###

foreach($class as $name => $info){
	if($info['gender'] == 'female')
		echo "<strong>$name</strong><br>";
	else
		echo "$name <br>";
}

###
# 2. Skriv ut hela klasslistan men gör personerna i respektive grupp i olika färg
###

$colors = array(1 => 'red',2 => 'green',3 => 'blue',4 => 'pink');

foreach($class as $name => $info){
		echo "<span style='color: {$colors[$info['group']]}'>$name</span><br>";
}

###
# 3. Skriv ut alla i klassen men  sorterade efter grupp. Så exempelvis Erik och Anders står först som grupp 1 och sedan Lisa och Nina som grupp två.
###

$class_by_group = array();

foreach($class as $name => $info){ // I den här loopen sorterar vi om listan in i en ny array
	$group = $info['group'];
	$class_by_group[$group][] = array('name' => $name, 'gender' => $info['gender']);
}

foreach($class_by_group as $group => $people){ // loopar igenom alla grupperna
	echo "<h1>Grupp $group</h1>";
	foreach($people as $info){ // loopar igenom personerna i gruppen
		echo "{$info['name']} <br>";
	}
}

###
# 4. Skriv ut alla grupper där alla medlemmar har samma kön
###
// Denna uppgift bygger nu på att vi har den omsorterade arrayen från uppgift 3 ovan

foreach($class_by_group as $group => $people){ // loopar igenom alla grupperna
	$same_gender = TRUE;
	$prev_gender = NULL;
	$group_html = "<h1>Grupp $group</h1>";
	foreach($people as $info){ // loopar igenom personerna i gruppen
		$group_html .= "{$info['name']} <br>";
		if($prev_gender && $prev_gender != $info['gender']) $same_gender = FALSE;
		$prev_gender = $info['gender'];
	}
	if($same_gender) echo $group_html;
}

###
# 5. Skriv ut alla tjejer som är med i en grupp med jämnt tal
###

foreach($class as $name => $info){
	if($info['gender'] == 'female' && $info['gender']%2 == 0)
		echo "$name <br>";
}

