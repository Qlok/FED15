<?php

# Varför blir det en tom rad på första raden? 
# Hur får vi bort den?

echo "<pre>";

for($i=0; $i<=10; ++$i){

	for($j=$i; $j>=1; --$j){

		echo "#";

	}

	echo "<br>";

}

echo "</pre>";