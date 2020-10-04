
<?php
	require_once("header.php");
?>
<body>
	<div class="form-box">
		<h1>Become Fitness and Training member</h1>	
	<form name='registration' method="POST" action="validator.php">
		<div class="form-group">
			<label for="firstname">First name:</label>
			<input class="form-control" type="text" name="firstname" size="50" />	
		</div>
		<div class="form-group">
			<label for="secondname">Second name:</label>
			<input class="form-control" type="text" name="secondname" size="50" />	
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input class="form-control" type="text" name="email" size="50" />	
		</div>
		<div class="form-group">
			<label for="email">Password:</label>
			<input class="form-control" type="password" name="password"	/>	
		</div>
		<div class="form-group">
			<label id="reffer">Reffered by a gym member:</label>
			<div class="btn-group btn-group-toggle" data-toggle="buttons">
				<label class="btn btn-secondary active">
				<input type="radio" name="reffered-yes" value="yes" id="yes"> YES!
				</label>
				<label class="btn btn-secondary">
					<input type="radio" name="referred-no" value="no" id="no"> NO 
				</label>
			</div>
		</div>
		<div class="form-group">
			<label for="type">Membership type:</label>	
			<select class="form-control" name="membership">
				<option selected="" value="Default">(Please select membership type)</option>
				<option value="Ind">Individual</option>
				<option value="Fam">Family</option>
			</select>	
		</div>
		<div class="form-group">
			<label for="age">Age:</label>
			<input type="age" name="age" size="5" />
		</div>
		<div class="form-group">
			<label for="duration">Membership duration:</label>	
			<select class="form-control" name="duration">
				<option selected="" value="Default">(Please select membership duration)</option>
				<option value="month1">Ongoing</option>
				<option value="month3">3 months</option>
				<option value="month6">6 months</option>
			</select>
		</div>
		<div class="form-group">
			<label for="desc">About:</label>
			<textarea class="form-control" name="desc" id="desc"></textarea>
		</div>
		<div class="form-group">
			<input class="btn btn-primary" type="submit" name="submit" value="Submit" />				
		</div>
	</form>	
	</div>
	<?php require_once("footer.php") ?>
</html>