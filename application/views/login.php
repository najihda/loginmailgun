<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
  		<div class="row">
  			<div class="card col" style="margin-top:10%;">
			  <div class="card-header"> Login OTP Featured </div>
			  <div class="card-body">
			    <form method="POST" action="<?php echo base_url();?>auth/login">
				  <div class="form-group">
				    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
				  </div>
				  <div class="form-group">
				    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
				  </div>
				  <button type="submit" class="btn btn-primary">Login OTP</button>
				  <a href="<?php echo base_url();?>auth/register" class="btn btn-primary">Register</a>
				  <a href="<?php echo base_url();?>auth/test" class="btn btn-primary">Test</a>
				</form>
			  </div>
			</div>
			<div class="col-1"> </div>
			<div class="card col" style="margin-top:10%;">
			  <div class="card-header"> Verification OTP Featured </div>
			  <div class="card-body">
			    <form>
				  <div class="form-group">
				    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter Code OTP">
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			  </div>
			</div>
  		</div>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>