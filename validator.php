<?php 
	
if($_SERVER["REQUEST_METHOD"] == "POST"){
	print_r($_POST);
	// getting all values from $_POST
	$firstname   = $_POST["firstname"];
	$secondname  = $_POST["secondname"];
	$email       = $_POST["email"];
	$password    = $_POST["password"];
	$reffered    = $_POST["reffered-yes"];
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
		global $email;
		return preg_match("/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+$/i", $email);
	}

	/**
	* @return true if valid 
	*/
	function referrerFieldValidator() {
		global $reffered;
		return isset($reffered) && (($reffered === true) || ($reffered === false));
	}

	function membershipFieldValidator() {
		global $membership;
		return isset($membership);
	}

	function ageFieldValidator() {
		global $age;
		return $age < 100 && $age > 16;
	}

	function durationFieldValidator() {
		// echo $duration;
		global $duration;
		return $duration === "month1" || $duration === "month3" || $duration === "month6";
	}

	function passwordFieldValidator() {
		// checking password
		global $passwordErr;
		$password = "";
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
		global $firstname;
		return ctype_alpha($firstname);
	}

	function initValidation() {
		$message = '';
		$error = 0;
		if(!nameValidator()){
			$message .= "Invalid Firstname or lastname.\n";
			$error++;
		}
		if(!passwordFieldValidator()) {
			$message .= "Invalid Password\n";
			$error++;
		} 
		if(!durationFieldValidator()) {
			$error++;
			$message .= "Invalid Duration\n";
		}
		if(!ageFieldValidator()) {
			$message .= "Invalid age\n";
			$error++;
		}
		if(!membershipFieldValidator()) {
			$message .= "Invalid membership\n";
			$error++;
		}
		if(!referrerFieldValidator()) {
			$message .= "Invalid referrer\n";
			$error++;
		}
		echo $message;
		if($error > 0) return false;
		return true;
	}

	function createUser() {
		global $firstname, $secondname, $email, $password,
				$reffered, $membership, $age, $duration,
				$description;
		$data	 = array(
			"firstname" => $firstname,
			"secondname" => $secondname,
			"email" => $email,
			"password" => $password,
			"reffered" => $reffered ? "yes" : "no",
			"membership" => $membership,
			"age" => $age,
			"duration" => $duration,
			"description" => $description 
		);
		$data = json_encode($data);
		// print_r($data);
		$inp = file_get_contents('data/user.json');
		print_r($inp);
		$tempArray = json_decode($inp, true);
		// array_push($tempArray, $data);
		$tempArray[] = $data;
		$jsonData = json_encode($tempArray);
		print_r($jsonData);
		file_put_contents('data/user.json', $jsonData);
		echo "Pushed";
	}

	if(initValidation()) {
		createUser();
		echo "WELCOME";
		header("Location:/logIn.html");
	} else {
		echo "Something went wrong";
	}



}