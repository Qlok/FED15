<?php

$a = 11;
$b = 5;
$method = 'plus';

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
