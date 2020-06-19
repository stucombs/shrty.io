<?php
	class Session {
		private function __construct() {
			session_start();
		}

		private function set(){

		}

		private function get(){

		}

		private function destroy(){
			return session_destroy();
		}
	}
?>