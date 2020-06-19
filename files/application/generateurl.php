<?php
	session_start();
	sleep(2);
	header('Location: ../../index.php');

	function createURL(){
		$arrNewURL = array('result' => 'https://shrty.io/id=1321dfa');
		$_SESSION['temp_url'] = $arrNewURL;
		return;
	}

	createURL();

	if(isset($_REQUEST['command'])){
		switch($_REQUEST['command']){
			case 'create';
				print("HELLO WORLD");
				exit;
			break;
		}
	}
?>