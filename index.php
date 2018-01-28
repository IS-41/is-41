<?php
include 'config.php';
	function __autoload($var) {
		include '/classes/'.$var.'.php';
	}
	
	
$TestPage = new OnePage('Работает!');
echo $TestPage->test;

$user = new Users();
echo $user->get_all();



?>
