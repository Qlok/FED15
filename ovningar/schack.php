<!doctype html>
<html>
<head>
<style type='text/css'>
td { border: 1px solid black; margin: 0; width: 40px; height: 40px; }
</style>
</head>
<body>
<?php
echo "<table>";
for($j=1; $j<=8;$j++){
	echo "<tr>";
	for($i=1; $i<=8;$i++){
		if(($i+$j)%2 == 1){ //om summan av rad och kolumn är udda
			echo "<td style='background: white;'></td>";
		}else{
			echo "<td style='background: black;'></td>";
		}
	}
	echo "</tr>";
}
echo "</table>";

/*
echo "<table>";
for($j=1; $j<=8;$j++){
	echo "<tr>";
	for($i=1; $i<=8;$i++){
		if($i%2 == 0 && $j%2 == 0){ //jämn rad och jämn kolumn
			echo "<td style='background: white;'></td>";
		}elseif($i%2 == 1 && $j%2 == 1){
			echo "<td style='background: white;'></td>";
		}else{
			echo "<td style='background: black;'></td>";
		}
	}
	echo "</tr>";
}
echo "</table>";

*/


?>
</body>
</html>