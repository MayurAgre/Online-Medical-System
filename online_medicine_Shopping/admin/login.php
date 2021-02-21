<?php require_once"dbconfig.php";
if(isset($_SESSION['login']))
{

	header("location:index.php");
}

?>
<!DOCTYPE HTML>
<html>
<?php include"head.php";?> 
<body>
	<style type="text/css">
		body{
background-color: #48dbfb;
background-image: linear-gradient(315deg, #48dbfb 0%, #d3d3d3 74%);


            height: 100vh;
		}
	</style>
<div class="page-container">
<div class="left-content">
<div class="inner-content">
<?php //include"header.php";?>
<div class="outter-wp">
<div class="sub-heard-part">
<ol class="breadcrumb m-b-0">
<li><a href="/ipminiproject/online_medicine_Shopping/index.php" style="color: #052963;font-weight: bold;border-bottom: 1px solid #052963;">Home</a></li>

</ol>
</div>
<div class="graph-visual tables-main" style=" box-shadow: inset 0 0px 0px rgba(0,0,0,.075),0 0 3px #00C6D7;">

<div class="graph">
<div class="block-page">
<p>
<h3 class="inner-tittle two">Login </h3>
<div class="grid-1" >
<div class="form-body">
<form class="form-horizontal" action="myphp.php" method="post"> 


<div class="form-group"> 
<label for="inputEmail3"  id="emailerror" class="col-sm-2 control-label">Email</label> 
<div class="col-sm-9">
<input type="text" class="form-control" id="email" name="email" placeholder="Email"> 
</div> 
</div>
<div class="form-group">
<label for="inputPassword3" id="passworderror" class="col-sm-2 control-label">Password</label> 
<div class="col-sm-9"> 
<input type="password" class="form-control" id="password" name='password' placeholder="Password"> 
</div>
</div>

<div class="col-sm-offset-2"> 
<input type="submit" class="btn btn-default newbtn" name="login" id="login" value="login"> </div> </form> 
</div>

</div>
</p>
</div>

</div>

</div>
</div>
<?php include"footer.php";?>

</div>
</div>
<?php include"side_bar.php";?>
</div>
<?php include"footer_script.php";?>
<script>

$(document).ready(function(){
$("#login").click(function(){
var valid=true;

var email=$.trim($("#email").val());
var email_r=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
var password=$.trim($("#password").val());


if(!(email_r.test(email)))
{
$("#emailerror").html('Invalid Email');
$("#emailerror").css("color","red");
$("#email").css("border-color","red");
valid=false;
}
else
{
$("#emailerror").html('Email');
$("#emailerror").css("color","black");
$("#email").css("border-color","#ddd");
}
if(password.length<6)
{
$("#passworderror").html('Invalid Password');
$("#passworderror").css("color","red");
$("#password").css("border-color","red");
valid=false;
}
else
{
$("#passworderror").html('Password');
$("#passworderror").css("color","black");
$("#password").css("border-color","#ddd");
}

var mymethod="post";
var myurl="myphp.php";
var mydata="email="+email+"&password="+password+"&login=yes";

$.ajax({
	
	method:mymethod,
	url:myurl,
	data:mydata,
	success:function(result)
	{
		if(result==1)
		{
			
			window.location="index.php";
			
			
			
		}
		else
		{
			alert(result);
		}
			
		
	}










});	






return false;
});
});














</script>
























</body>
</html>