<?php


$inp = file_get_contents('data/user.json');
$user = json_decode($inp, true);
foreach($user as $u) {
    $u = json_decode($u);
    if($u->firstname == $_SESSION['user']) {
        $bmi = $u->weight/$u->height;
        echo " <div class='container'>
            <table class='table'>
            <thead>
                <tr>
                <th scope='col'>Age</th>
                <th scope='col'>Weight</th>
                <th scope='col'>Heigth</th>
                <th scope='col'>BMI</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>{$u->age}</td>
                <td>{$u->weight}</td>
                <td>{$u->height}</td>
                <td>{$bmi}</td>
            </tr>
            </tbody>
            </table>
        </div>";
    }
}

?>