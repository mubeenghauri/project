<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $inp = file_get_contents('../data/user.json');
    $data = json_decode($inp, true);
    // print_r($data); 

    foreach($data as $user) {
        $user = json_decode($user);
        // print_r($user);
        // echo $user->firstname;
        if($user->email == $username) {
 //           echo "hey";
 //           echo $user->email." - ".$user->password." - ".$password;
            if($user->password == $password) {
 //               echo "Logged In";
                $_SESSION['user'] = $user->firstname;
                header("Location:/myfitness.php");
            }
        }
    }
    echo "Invalid credentials";
}
