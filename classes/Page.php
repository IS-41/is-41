<?php 
	/**
	* 
	*/
	class Page
	{
		public $text;

    public function get_all(){//Получение всех статей

    }

    public function get_one($id){//Получение одной статьи
    	
    }

    // Метод класса описывающий вывод статьи на экран, через функцию буферизации. Детально ознакомиться на ресурсе php.net
    public function get_body($text,$file){  	
    	
    	ob_start();

    	include $file.'.php';

    	return ob_get_clean();
    }
	}
 ?>