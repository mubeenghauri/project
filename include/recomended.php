<?php



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

$inp = file_get_contents('data/user_stats.json');
$user = json_decode($inp, true);

$min = 99999999;

$collection = ["cycleing", "gardening", "running"];

foreach($collection as $c) {
    if($user[$c] < $min) {
        $min = $c;
    }
}

if($min === "cycleing") {
    echo $cycle;
} else if($min === "running") {
    echo $running;
} else {
    echo $garden;
}

?>