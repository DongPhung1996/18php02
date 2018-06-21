<?php
	class Apps_Libs_Router{
		const PARAM_NAME = "r";
		const HOME_PAGE = "home";
		const INDEX_PAGE = "index";

		public static $sourcePath;

		public function __construct($sourcePath=""){
			if($sourcePath){
				self::$sourcePath = $sourcePath;
			}
		}

		public function getGET($name){
			if($name !== NULL){
				return isset($_GET[$name])? $_GET[$name] : NULL;
			}
			return $_GET;
		}

		public function getPOST($name){
			if($name !== NULL){
				return isset($_POST[$name])? $_POST[$name] : NULL;
			}
			return $_POSTT;
		}

		public function router(){
			$url = $this->getGET(self::PARAM_NAME);
			if(!is_string($url)|| $url || $url == self::INDEX_PAGE){
				$url = self::HOME_PAGE;
			}
			$path = self::$sourcePath."/".$url.".php";
			if(file_exists($path)){
				return require_once $path;
			}else{
				$this->pageNotFound();
			}

		}

		public function pageNotFound(){
			echo "404 Page Not Found!";
			die();
		}
	}
?>