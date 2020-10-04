<?php

$inp = file_get_contents('data/user_stats.json');
$user = json_decode($inp, true);

if(sizeof($user) == 0) {
    echo "<div class='alert alert-danger' role='alert'>
    No Log Record Found !!
  </div>";
} else {
    echo " <div class='container'>
    <table class='table'>
    <thead>
        <tr>
        <th scope='col'>Running</th>
        <th scope='col'>Cycling</th>
        <th scope='col'>Gardening</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td>{$user["running"]}</td>
        <td>{$user["cycleing"]}</td>
        <td>{$user["gardening"]}</td>
    </tr>
    </tbody>
    </table>
</div>";}

?>