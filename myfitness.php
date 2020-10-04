<?php
    require_once("include/header.php");
    if(!isset($_SESSION['user'])) {
        header("Location:logIn.php");
    }
    require_once("include/exerciseUpdater.php");
?>
    <div class="container">
        <h1 style="margin:20px;"> Welcome , <?php echo $_SESSION['user']?></h1>
        <div class="container" style="margin:20px;">
            <div class="row">
            <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form class="form-inline">
                        <input id="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <div id="main-box" class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="assets/images/running.jpg" alt="Card image cap" style="height:180px;">
                <div class="card-body">
                    <h5 class="card-title">Running</h5>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#runningModal">Update</a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="assets/images/cycleing.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Cycleing</h5>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#cycleingModal">Update</a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="assets/images/gardening.jpeg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Gardening</h5>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#gardeningModal">Update</a>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h1>User Details</h1>
        <?php require_once("include/check_stats.php");?>
        <div class="container">
            <form action="?update-weekly-goal=1" method="POST">
                <div class="form-group">
                    <label for="">Weekly Goal</label>
                    <input type="text" name="goal">
                    <input type="submit" class="btn btn-primary" value="Update">
                </div>
            </form>
        </div>
        <?php require_once("include/goal.php");?>
    </div>

    <div class="container">
        <h1> Recommended For You !</h1>
        <?php require_once("include/recomended.php")?>
    </div>

    <div class="container">
        <h1>Log Book</h1>
        <?php require_once("include/log.php");?>
    </div>

    <div class="container">
        <h1>Weekly Goal</h1>
        <div class="row">
            <div class="col-md-8">
                <?php $average = (($user["running"] + $user["gardening"] + $user["cycleing"]));?>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: <?php echo ($average/$user['goal'])*100?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>  
            </div>
            <div class="col-md-4">
                <h5>GOAL!</h5>
            </div>
        </div>
        <div class="row text-center center">
            <?php echo $average?> / <?php echo isset($user["goal"]) ? $user["goal"] : 100; ?>   
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="runningModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Running Stats</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="form">
                    <form action="?update-exercise-stats=running" method="POST">
                        <div class="form-group">
                            <label for="#f1"> Distance </label>
                            <input id="f1" type="text" name="running" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
        </div>
        </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="cycleingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Cycleing Stats</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="form">
                    <form action="?update-exercise-stats=cycleing" method="POST">
                        <div class="form-group">
                            <label for="#f1"> Distance </label>
                            <input id="f1" type="text" name="cycleing" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
        </div>
        </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="gardeningModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Gatdening Stats</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="form">
                    <form action="?update-exercise-stats=gardening" method="POST">
                        <div class="form-group">
                            <label for="#f1"> Hours </label>
                            <input id="f1" type="text" name="gardening" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
        </div>
        </div>
    </div>
    </div>

<?php require_once("include/footer.php")?>