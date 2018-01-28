<?php
include 'config.php';
	function __autoload($var) {
		include '/classes/'.$var.'.php';
	}
	
	
$TestPage = new OnePage('Работает!');
echo $TestPage->test;


?>
<!DOCTYPE testhtml>
<html>
<head>
	<title>test</title>
</head>
<body>
<h1>Hello world</h1>
</body>
</html>