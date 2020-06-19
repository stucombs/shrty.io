<?php
	class Security {
		private $objApplication = null;

		public function __construct() {
			global $_APPLICATION;
			if(!isset($_APPLICATION)){
				die("Could not load application variable.");
			}else{
				$this->objApplication = $_APPLICATION;
			}
			
			session_start();
		}
	}
?>