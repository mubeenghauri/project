<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>My Fitness</title>
	<meta name="keywords" content="example, JavaScript Form Validation, Sample registration form" />
	<meta name="description" content="This document is an example of JavaScript Form Validation using a sample registration form. " />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/real_index.css">
    <script src="assets/js/jquery.js"></script>
    <style type="text/css">
		
		.form-box {
			margin:100px;
		}
	</style>
</head> 

<body> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  style="background-color: #e3f2fd;">
    <a class="navbar-brand">
        <span style="color: white;">My Fitness</span>  
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.html">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
        </li>
        </ul>
    </div>
    <div class="navbar-collapse">
         <ul class="navbar-nav">
            <li class="nav-item">
                <?php 
                    $xml = file_get_contents("http://api.weatherapi.com/v1/current.json?key=340cd7d2dde147dfbf9171425200410&q=Melbourne");
                    $xml = json_decode($xml);                                                                                                                                                                                                                                                                                                                                                                      
                ?>
                <a class="nav-link" href="index.php">Weather : <?php echo $xml->current->condition->text;?></a>
            </li>
            </li>
            <form action="?logout=1" method="POST" class="form-inline" style="margin-left:100px;">
                <input type="submit" class="btn btn-primary" value="Logout">
            </form>
        </ul>
    </div>
</nav>
<?php require_once("include/logout.php")?>
