<?php require_once"dbconfig.php";
if(isset($_SESSION['login']))
{
	
}
else
{
	header("location:login.php");
}

?>
<!DOCTYPE HTML>
<html>
<?php include"head.php";?> 
<style type="text/css">
	body{
		background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80") no-repeat;
		background-position: center;
		background-size: cover;
		height: 100vh;
	}
	
      }

</style>
<body>
<div class="page-container">
<div class="left-content">
<div class="inner-content">
<?php //include"header.php";?>
<div class="outter-wp">
<div class="sub-heard-part">
<ol class="breadcrumb m-b-0">
<li><a href="/ipminiproject/online_medicine_Shopping/index.php">Home</a></li>
<li class="active">Admin</li>
</ol>
</div>

<div class="graph-visual tables-main">
<div >
<div >
	
<!--<p class="welcome-p">WELCOME<br></p>
<p class="admin-p">
<?php
/*if(isset($_SESSION['name']))
{
	$name=$_SESSION['name'];
	echo"$name";
}*/

?>
</span>
</p>-->
<p style="color:white;text-align:center;font-size:5rem;"><span style="border-bottom:1px solid #fff">Welcome</span></p>
<img src="./images/logo_transparent.png" style="height:100px;width:100px;float:right;margin-top:-180px">
</div>

</div>

</div>
</div>
<?php include"footer.php"?>
</div>
</div>
<?php include"side_bar.php";?>
</div>
<?php include"footer_script.php";?>
</body>
</html>