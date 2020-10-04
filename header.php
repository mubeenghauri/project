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
    <style type="text/css">
		.form-box {
			margin:100px;
		}
        .card {
            width: 100%;
            height: 15vw;
            object-fit: cover;
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
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
        </li>
        </ul>
    </div>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>
