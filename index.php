<?php
include 'config.php';
	function __autoload($var) {
		include '/classes/'.$var.'.php';
	}
	
$db = new db(HOST,USER,PASS,DB);
echo $post = $db->query("SELECT * FROM user");

$TestPage = new OnePage('Работает!');
echo $TestPage->test;

$user = new Users();
echo $user->get_all();



?>
