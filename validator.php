<?php 
// print_r($_POST);
// getting all values from $_POST
$firstname   = $_POST["firstname"];
$secondname  = $_POST["secondname"];
$email       = $_POST["email"];
$password    = $_POST["password"];
$reffered    = $_POST["referred"];
$membership  = $_POST["membership"];
$age         = $_POST["age"];
$duration    = $_POST["duration"];
$description = $_POST["desc"];
$reffered    = isset($_POST["referred-yes"]) ? true : false;

/**
* validates Email
* @return true if valid, false otherwise 
*/
function emailFieldValidator() {
	return preg_match("/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+$/i", $email);
}

/**
* @return true if valid 
*/
function referrerFieldValidator() {
	return isset($reffered) && (($reffered === true) || ($reffered === false));
}

function membershipFieldValidator() {
	return isset($membership);
}

function ageFieldValidator() {
	return $age < 100 && $age > 16;
}

function durationFieldValidator() {
	// echo $duration;
	return $duration === "month1" || $duration === "month2" || $duration === "month3";
}

function passwordFieldValidator() {
	// checking password
	if (strlen($_POST["password"]) < '6') {
	    $passwordErr = "Your Password Must Contain At Least 6 Characters!";
	}
	echo $passwordErr;
	if(isset($passwordErr)) return false;
	return true;
}

/**
* validates First Name and Lastname
* @return true is valid, false otherwise
*/
function nameValidator() {
	return ctype_alpha($firstname);
}

function initValidation() {
	if(nameValidator()){
		$message .= "Invalid Firstname or lastname.\n";
	}
	if(!passwordFieldValidator()) {
		$message .= "Invalid Password\n";
	} 
	if(durationFieldValidator()) {
		$message .= "Invalid Duration\n";
	}
	if(ageFieldValidator()) {
		$message .= "Invalid age\n";
	}
	if(membershipFieldValidator()) {
		$message .= "Invalid membership\n";
	}
	if(referrerFieldValidator()) {
		$message .= "Invalid referrer\n";
	}

	if(isset($message)) {
		echo $message;
		return false;
	}
	return true;
}

if(initValidation()) {
	echo "WELCOME";
} else {
	echo "Something went wrong";
}



