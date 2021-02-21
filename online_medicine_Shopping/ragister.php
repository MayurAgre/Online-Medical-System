<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="css/ragister.css" rel="stylesheet">
<script>
$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

	
</script>
<?php
require_once"dbconfig.php";
?>
<style>
body {
  background-image: url('https://media.istockphoto.com/photos/blue-medical-background-with-clipboard-and-stethoscope-picture-id1133637775');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<script>
					function val(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "pwdlen.php";
    var fn = document.getElementById("confirm-password").value;
	console.log(fn);
    var vars = "pwd="+fn;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	// Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "";
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("status").innerHTML = return_data;
			
	    }}}
					</script>
<!------ Include the above in your HEAD tag ---------->
<?php
require_once"dbconfig.php";


?>
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
					
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form"  method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="email" name="email" id="username" tabindex="1" class="form-control" placeholder="Email" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									
								</form>
								<form id="register-form" action="" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="name" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="text" minlength="10" maxlength="10" name="mobile" id="password" tabindex="2" class="form-control" placeholder="Mobile">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="confirm-password"  tabindex="2" class="form-control" placeholder="Password" onkeyup="val()">
										<div id="status">	</div>
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
									
								</form>
								
<?php
if(isset($_REQUEST['register']))
	{
		extract($_REQUEST);
		$str=$password;
  $sa=str_split($str);
	$u=0;
	$p=0;
	$n=0;
	foreach ($sa as $i ) {
		# code...
		if(ctype_upper($i)){
			$u=1;
		}
		if(ctype_digit($i)){
			$n=1;
		}
		if(ctype_punct($i)){
			$p=1;
		}
	}
	if(strlen($password)>4 && $u==1 && $p==1 && $n==1){
		$password=($password);
		
		$str=$mobile;
  $sa=str_split($str);
	$n=0;
	foreach ($sa as $i ) {
		if(ctype_digit($i)){
			$n=1;
		}else{
			$n=0;
			break;
		}
	}if($n==1){
	
				$query="INSERT INTO `user`(`name`, `mobile`, `email`, `password`)
	            values('$name','$mobile','$email','$password')";
				$nan=iud($query);
	 if($nan==1)
	{	$_SESSION['em']=$email;
		$_SESSION['un']=$name;
		echo"<script>alert('Register successfull');

		
		 window.location='mailjet.php';
		 </script>";
	}
	else
	{
	echo"<script>alert('Something Wrong');
		 window.location='ragister.php';
		 </script>";
	
	}}
	else{
		echo"<script>alert('Phone Number should contain only 10 digit');
		 window.location='ragister.php';
		 </script>";
	}
	}
	
	else{
		echo"<script>alert('Password minimum length 5 character, 1 digit 1 uppercase and 1 special character required !!!');
		 window.location='ragister.php';
		 </script>";
	}
	}
	

	if(isset($_REQUEST['login']))
	{	
		extract($_REQUEST);
		// $password=md5($password);
		$query="select * from `user` where email='$email' and password='$password'";
		$login_data=select($query);
	$n=mysqli_num_rows($login_data);
	if($n==1)
	{
		while($data=mysqli_fetch_array($login_data))
		{
		extract($data);
		
		}
		
		$_SESSION['userid']=$userid;
		$_SESSION['login']="yes";
		echo"<script>window.location.href='index.php';</script>";
		// header("location:index.php?id=".$_SESSION['userid']."");
	}
	else
	{
		echo"email or password is incorrect";
	}
	
	}
	?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	