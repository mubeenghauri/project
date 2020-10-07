<?php require_once("include/header.php");?>
    
<div class="container">
	<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item active" aria-current="page">Home / Contact us</li>
	</ol>
	</nav>
</div>

<div class="main-wrapper">
    <h1> CONTACT US </h1>
    <p> This is a website created by Hung, based on the Fitness Blender website. (Ref.: Fitness Blender. 2020. Fitness Blender. </p>

    <form>
    <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Type your comment"></textarea>
  </div>

  <button type="button" class="btn btn-dark">Send</button>
</form>


</div>

<?php require_once("include/footer.php")?>