<?php 


function updateGardening($val) {
    $inp = file_get_contents('data/user_stats.json');
    $user = json_decode($inp, true);    
    if(isset($user["gardening"])) {
        $user["gardening"] += $val;
    } else {
        $user['gardening'] = $val;
    }
    $jsonData = json_encode($user);
    file_put_contents('data/user_stats.json', $jsonData);
}

function updateCycleing($val) {
    $inp = file_get_contents('data/user_stats.json');
    $user = json_decode($inp, true);    
    if(isset($user["cycleing"])) {
        $user["cycleing"] += $val;
    } else {
        $user['cycleing'] = $val;
    }
    $jsonData = json_encode($user);
    file_put_contents('data/user_stats.json', $jsonData);
}

function updateRunning($val) {
    $inp = file_get_contents('data/user_stats.json');
    $user = json_decode($inp, true);    
    if(isset($user["running"])) {
        $user["running"] += $val;
    } else {
        $user['running'] = $val;
    }
    $jsonData = json_encode($user);
    file_put_contents('data/user_stats.json', $jsonData);
}

if($_SERVER["REQUEST_METHOD"]  == "POST") {
    if(isset($_GET['update-exercise-stats'])) {
        if($_GET['update-exercise-stats'] == "running") {
            updateRunning($_POST['running']);
        }
        if($_GET['update-exercise-stats'] == "cycleing") {
            updateCycleing($_POST['cycleing']);
        }
        if($_GET['update-exercise-stats'] == "gardening") {
            updateGardening($_POST['gardening']);
        }
    }
}

?>