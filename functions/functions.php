<?php
//Helper functions
//function to clean out special characters like $, #,@ in the password
function clean($string){
	return htmlentities($string);
}

function redirect($location){
	return header("Location: {$location}");
}

//set messages in session
function set_message($message) {
	if(!empty($message)) {
		$_SESSION['message'] = $message;
	}
	else {
		$message = ""; //set message to empty string
	}

}

function display_message () {
	if(isset($_SESSION['message'])) {
		echo $_SESSION['message'];
		unset ($_SESSION['message']);
	}
}

function token_generator () {
	$token = $_SESSION['token'] = md5(uniqid(mt_rand(),true));
	return $token;
}

//Validation functions----------------------------------------

?>
