<!doctype html>
<!-- Det här är form.html -->
<html>
<head></head>
<body>

<form action="" method="post">
	<input type="text" name="a">
	<input type="text" name="method">
	<input type="text" name="b">
	<input type="submit">
</form>

<?php

$a = $_POST['a'];
$b = $_POST['b'];
$method = $_POST['method'];

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

?>

</body>
</html>
