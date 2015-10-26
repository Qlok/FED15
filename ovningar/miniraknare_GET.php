<?php

$a = $_GET['a'];
$b = $_GET['b'];
$method = $_GET['method'];

switch ($method){
	case 'plus':
			echo $a+$b;
		break;
	case 'minus':
			echo $a-$b;
		break;
	case 'gånger':
			echo $a*$b;
		break;
	case 'delat':
			echo $a/$b;
		break;
}
