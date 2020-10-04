<?php
    require_once("header.php");
    if(!isset($_SESSION['user'])) {
        header("Location:logIn.html");
    }
?>
    
    <div class="container">
        <h1> Welcome , <?php echo $_SESSION['user']?></h1>

        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 100%; height: 1rem;">
                <img class="card-img-top" src="assets/images/running.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Running</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="assets/images/cycleing.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Cycleing</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="assets/images/gardening.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Gardening</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once("footer.php")?>