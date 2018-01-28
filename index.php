<?php
include 'config.php';
	function __autoload($var) {
		include '/classes/'.$var.'.php';
	}
	
$db = new db(HOST,USER,PASS,DB);
$post = $db->query("SELECT * FROM user");

$TestPage = new OnePage('Работает!');
echo $TestPage->test;

$user = new Users();
echo $user->get_all();



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<? if(isset($post)) : ?>
		<? foreach ($post as $item) : ?>
			<h2>
				<p><?=$item['name'];?></p>
			</h2>
			<p>
				<?=$item['surname'];?>
			</p>
			<p>
				<?=$item['email'];?>
			</p>
		<? endforeach; ?>
	<? endif; ?>
</body>
</html>
