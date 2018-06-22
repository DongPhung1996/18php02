<?php
	//Class này giúp kết nối đến database
	//$auther: Dong
	//date: 21/6
	class Apps_Libs_DbConnection
	{
		protected $username = "root";
		protected $password = "";
		protected $host = "localhost";
		protected $database = "website_tin_tuc";
		protected $tableName;
		protected $queryParams = [];
		protected static $connectionInstance = null;

		public function __construct(){
			$this->connect();
		}
		//Tạo kết nối đến database
		//@return new PDO
		public function connect(){
			if(self::$connectionInstance === null){
				try{
					self::$connectionInstance = new PDO('mysql:host='.$this->host.';dbname='.$this->database,$this->username,$this->password);
					self::$connectionInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				}catch(Exception $ex){
					echo "ERROR".$ex->getMessage();
					die();
				}
			}
			return self::$connectionInstance;
		}
		//Hàm để query dữ liệu
		//
		public function query($sql, $param = []){
			$q = self::$connectionInstance->prepare($sql);

			if(is_array($param)&&$param)
			{
				$q->execute($param);
			}
			else
			{
				$q->execute();
			}
			return $q;
		}

		public function buildQueryParams($params){
			$default = [
				"select"=>"*",
				"where"=>"",
				"other"=>"",
				"params"=>"",
				"field" => "",
				"value" => []
			];
			//array_merge gộp mảng sau vào vào mảng trước ghi đè ví dụ
			// $params=[
			// 	"select"=>"*",
			// 	"where"=>"id = 0",
			// ];
			// [
			// 	"select"=>"*",
			// 	"where"=>"0",
			// 	"other"=>"",
			// 	"params"=>""
			// ];

			$this->queryParams = array_merge($default, $params);

			return $this;
		}

		public function buildCondition($condition){
			if(trim($condition)){
				return "where ".$condition;
			}
			return "";
		}

		public function select(){
			$sql = "select ".$this->queryParams["select"]." from ".$this->tableName."  ".$this->buildCondition($this->queryParams["where"])." ".$this->queryParams["other"];
			// var_dump($sql);
			// die();
			$query = $this->query($sql, $this->queryParams["params"]);
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		public function selectOne(){
			$this->queryParams["other"] = "limit 1";
			// var_dump($this->queryParams);
			// die();
			$data = $this->select();

			if($data){
				return $data[0];
			}
			return [];
		}

		public function insert(){
			$sql = "insert into ".$this->tableName." ".$this->queryParams["field"];
			$result = $this->query($sql, $this->queryParams["value"]);
			if($result){
				return self::$connectionInstance->lastInsertId();
			}
			else{
				return FALSE;
			}
		}

		public function update(){
			$sql = "update ".$this->tableName." set ".$this->queryParams["value"]." ".$this->buildCondition($this->queryParams["where"])." ".$this->queryParams["other"];
			return $this->query($sql);
		}

		public function delete(){
			$sql = "delete from ".$this->tableName." ".$this->buildCondition($this->queryParams["where"]).""." ".$this->queryParams["other"];
			return $this->query($sql);
		}
	}
?>