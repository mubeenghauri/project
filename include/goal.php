<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_GET['update-weekly-goal'])) {
        $goal = $_POST["goal"];
        $inp = file_get_contents('data/user.json');
        $user = json_decode($inp, true);
        $user['goal'] = $goal;
        $jsonData = json_encode($user);
        file_put_contents('data/user_stats.json', $jsonData);
    }
}

?>