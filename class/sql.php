<?php
class Sql extends PDO {  // classe extendida do PDO
	
	private $conn;
	
	public function __construct(){
		
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");
	}
	private function setParams($statment,$parameters = array()){
		foreach ($parameters as $key => $value){
			$this->setParam($statment,$key,$value);
		}
		
	}
	private function setParam($statment,$key,$valor){
	   $statment->bindParam($key,$value);	
	}
	public function query($rawQuery, $params = array()){
		
		$stmt = $this->conn->prepare($rawQuery);
		$this->setParams($stmt,$params);
		$stmt->execute();
		return $stmt;
	}

        public function select($rawQuery, $params = array()):array
		{
		   echo "query=".$rawQuery." ".$params;
		   $stmt = $this->query($rawQuery, $params);
           return $stmt->fetchAll(PDO::FETCH_ASSOC);
			
		}
}

?>
