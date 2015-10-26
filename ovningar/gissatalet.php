<?php


const NUMBER = 11;

$guess = 9;

if($guess == NUMBER){
	echo "rätt!";
}elseif($guess < NUMBER) {
	echo "gissa högre";
}elseif($guess > NUMBER) {
	echo "gissa lägre";
}