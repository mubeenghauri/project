<?php
// echo "HEY";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // echo "Logtout";
        if(isset($_GET["logout"])) {
            if(isset($_SESSION)) {
                session_destroy();
                header("Refresh:0");
            }
        }
    }

?>