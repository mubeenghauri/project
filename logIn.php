<?php require_once("include/header.php") ?>
      <div class="main-wrapper">
        <div class="body-heading">
          Welcome, Please Login
        </div>    
        <form action="include/loginValidator.php" method="POST">
            <div class="form-group" >
                <!-- action="home.html" method="get"> -->
            <label for="exampleInputEmail1">Username</label>
            <input type="text" name = "username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your roll number" width="200">
            <small id="emailHelp" class="form-text text-muted">We'll never share your personal details with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name = "password" id="exampleInputPassword1" placeholder="Password">
          </div>
         
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php require_once("include/footer.php")?>