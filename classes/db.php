
<?php
//класс БД
class db {
 public $connection;
//Подключение к БД
	public function __construct($host,$user,$pass,$db) {
		$this->connection = new mysqli($host,$user,$pass,$db);
		$this->query("SET NAMES UTF8");
		if(!$this->connection) {
			echo('No connection with database');
		}
		
		
		return $this->connection;
	}
//Функция запроса
	public function query($sql) {
		if (!$this->connection) {
			return FALSE; 
		}
		$result = $this->connection->query($sql);
	
	if ( is_bool($result) ){
            return $result;
        }

        $data = array();
        while( $row = mysqli_fetch_assoc($result) ){
            $data[] = $row;
        }

        mysqli_free_result($result);

        return $data;
    }
//функция обработки строки запроса   
    public function escape($str){
        return mysqli_escape_string($this->connection, $str);
    }
    public function get_all_db(){
            
        }

        public function get_one_db($id){

         
        }
}

?>
