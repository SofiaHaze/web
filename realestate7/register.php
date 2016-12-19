<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Register</span>
    <h2>Register</h2>
</div>
</div>
<!-- banner -->

<div class="container">
	<div class="spacer">
		<div class="row register">
			<div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
    			<form method = "post" action = "register_check.php">
    				<input type="text" name="form_name" class="form-control" placeholder="Full Name" >
    				<input type="text" class="form-control" placeholder="Enter Email" name="form_email">
    				<input type="password" class="form-control" placeholder="Password" name="form_password">
    				<input type="password" class="form-control" placeholder="Confirm Password" name="form_password2">
    				<textarea rows="6" class="form-control" placeholder="Address" name="form_address"></textarea>
					<input type="submit" class="btn btn-success" value="등록"/>
				</form>
			</div>  	
		</div>
	</div>
</div>

<?php include'footer.php';?>