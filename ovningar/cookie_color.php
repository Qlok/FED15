<?php

if($_GET['color']){
	$color = $_GET['color'];
	setcookie('color', $color);
}else{
	$color = $_COOKIE['color'];	
}

echo "<body style='background: $color;'>";