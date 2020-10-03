<?php 
print_r($_POST);
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


// checking password
if (strlen($_POST["password"]) < '6') {
    $passwordErr = "Your Password Must Contain At Least 6 Characters!";
}
elseif(!preg_match("#[0-9]+#",$password)) {
    $passwordErr = "Your Password Must Contain At Least 1 Number!";
}
elseif(!preg_match("#[A-Z]+#",$password)) {
    $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
}
elseif(!preg_match("#[!\^\&]+#",$password)) {
    $passwordErr = "Your Password Must Contain At Least 1 of !,^,&!";
} else {
	echo "Password valid";
}
echo $passwordErr;
