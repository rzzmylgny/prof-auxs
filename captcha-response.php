<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$a = $_POST['captcha'];
$b = $_POST['capcode'];

if($a == $b){
	?>
	<h1>Hurray</h1>
	<?php
}else{
	?>
	<h1>Nope</h1>
	<?php
}


?>
</body>
</html>
