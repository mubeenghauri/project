<?php

$searchVal = $_POST["q"];

$data = ["running", "cycleing", "gardening"];

$response = "No results Found";


$cycle = "
<div class='col-md-4'>
                <div class='card' style='width: 18rem;'>
                <img class='card-img-top' src='assets/images/cycleing.jpeg' alt='Card image cap' style='height:180px;'>
                <div class='card-body'>
                    <h5 class='card-title'>Cycleing</h5>
                    <a href='#' class='btn btn-primary' data-toggle='modal' data-target='#cycleingModal'>Update</a>
                </div>
                </div>
            </div>
";

$garden = "
<div class='col-md-4'>
                <div class='card' style='width: 18rem;'>
                <img class='card-img-top' src='assets/images/gardening.jpeg' alt='Card image cap' style='height:180px;'>
                <div class='card-body'>
                    <h5 class='card-title'>Gardening</h5>
                    <a href='#' class='btn btn-primary' data-toggle='modal' data-target='#runningModal'>Update</a>
                </div>
                </div>
            </div>
";

$running = "
<div class='col-md-4'>
                <div class='card' style='width: 18rem;'>
                <img class='card-img-top' src='assets/images/running.jpg' alt='Card image cap' style='height:180px;'>
                <div class='card-body'>
                    <h5 class='card-title'>Running</h5>
                    <a href='#' class='btn btn-primary' data-toggle='modal' data-target='#runningModal'>Update</a>
                </div>
                </div>
            </div>
";

$default = $cycle.$garden.$running;


foreach($data as $d) {
    if(strpos($d, $searchVal) != false) {
        if($response == "No results Found") {
            $response = "";
        }
        if($d == "cycleing") {
            $response .= $cycle;
        }
        if($d == "gardening") {
            $response .= $garden;
        }
        if($d == "running") {
            $response .= $running;
        }
    }
}

if($searchVal == "") {
    echo $default;
} else {
    echo $response;
}

?>