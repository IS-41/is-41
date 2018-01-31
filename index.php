<?php
session_start();

//подключение файла конфигурации
include 'config.php';
//функция автозагрузки класов
	function __autoload($var) {
		include '/classes/'.$var.'.php';
	}
//вывод юзера
if($add) {
$_SESSION['add'] = $add;
header("Location: ".$_SERVER["PHP_SELF"]);
exit;
}

$name=$_POST['name'];
$surname=$_POST['surname'];
$email=$_POST['email'];	
$db = new db(HOST,USER,PASS,DB);
$post = $db->query("SELECT * FROM user");
if(isset($_POST['add'])){
$add = $db->query("INSERT INTO `user` (`id_user`,`name`,`surname`,`email`) VALUES (null,'".$name."','".$surname."','".$email."')");

}


$TestPage = new OnePage('Работает!');
echo $TestPage->test;

$user = new Users();
echo $user->get_all();
//Шаблонизатор вроде как :D
//-------------------------------------------------
$page = new Page();

	if (isset($_GET['id'])) {
		$id = (int)$_GET['id'];
		if (condition) {
			$text = $page->get_one($id);
			echo $page->get_body($text, 'view');
			exit();
		}else{
			exit('wrong parameter');
		}
	}else{
		$text = $page->get_all();
		echo $page->get_body($text,'main');
	}
//-------------------------------------------------
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="name"><br>
		<input type="text" name="surname"><br>
		<input type="text" name="email"><br><br>
		<input type="submit" name="add"><br>
	</form>
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
