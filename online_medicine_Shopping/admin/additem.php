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
<head>
<?php include"head.php";?> 
<script type="text/javascript" src="js/nicEdit-latest.js"></script>

</head>
<body style="background-color: #48dbfb;
background-image: linear-gradient(315deg, #48dbfb 0%, #d3d3d3 74%);
height:100vh">
<div class="page-container">
<div class="left-content">
<div class="inner-content">
<?php //include"header.php";?>
<div class="outter-wp">
<div class="sub-heard-part">
<ol class="breadcrumb m-b-0">
<li><a href="index.html">Home</a></li>
<li class="active">Add Items</li>
</ol>
</div>
<div class="graph-visual tables-main">
<h2 class="inner-tittle">Add Medicine</h2>
<div class="graph" style="height:100vh;box-shadow: inset 0 0px 0px rgba(0,0,0,.075),0 0 3px #00C6D7;margin-right:15px;">
<div class="block-page">
<p>
<h3 class="inner-tittle two" style="font-weight:bold;border-bottom:1px solid #aaa;">Medicine</h3>
<div class="form-body">
<form class="form-horizontal" action="myphp.php" method="post" enctype="multipart/form-data"> 

<div class="form-group">
<label for="inputPassword3" id="errortitle" class="col-sm-2 control-label">Name</label> 
<div class="col-xs-6"> 
<input type="text" class="form-control" id="title" name='title' placeholder="Title" required> 
</div>
</div>
<div class="form-group">
<label for="inputPassword3" id="errortitle" class="col-sm-2 control-label">Category</label> 
<div class="col-xs-6"> 
<select class="form-control" name="category" style="padding:5px">
<option>Select Category</option>
<option value="HOMEOPATHY">HOMEOPATHY</option>
<option value="VITAMINSSUPPLEMENTS">VITAMINS & SUPPLEMENTS</option>
<option value="AYURVEDA">AYURVEDA</option>
<option value="HEALTHFOOdDRINKS">HEALTH FOOD & DRINKS</option>
<option value="HEALTHCAREDEVICES">HEALTHCARE DEVICES</option>
<option value="SKINCARE">SKIN CARE</option>
</select>
</div>
</div>

<div class="form-group">
<label for="inputPassword3" id="errormetakey" class="col-sm-2 control-label">Rating</label> 
<div class="col-xs-6"> 
<input type="text" class="form-control" name="rating" min="1" max="5"  value="Rating" placeholder="Rating" required>
</div>
</div>

<div class="form-group"> 
<label for="inputEmail3" id="image" class="col-sm-2 control-label">Image</label> 
<div class="col-xs-6">
<input type="file" class="form-control col-xs-4" id="image"  name="image" required> 
</div> 
</div>

<div class="form-group"> 
<label for="inputEmail3" id="video_link" class="col-sm-2 control-label">Price</label> 
<div class="col-xs-6">
<input type="text" class="form-control col-xs-4" id="video_link" name="price" placeholder="Price" required> 
</div> 
</div>

<div class="form-group"> 
<label for="inputEmail3" id="cpassworderror" class="col-sm-2 control-label">Description</label> 
<div class="col-xs-6">
 <textarea name="discription" class="form-control col-xs-4" required>
</textarea>
</div>
</div>
<div class="col-xs-6"> 
<center><input type="submit" class="btn btn-info" name="elect_submit" id="elec_submit" value="SUBMIT" ></center> </div> </form> 
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
<!--<script>

$(document).ready(function(){
	
$("#project_submit").click(function(){
	
var valid=true;
var title=$.trim($("#title").val());
var metakey=$.trim($("#metakey").val());
var metadis=$.trim($("#metadis").val());

if(title.length<6)
{
$("#errortitle").html('Invalid title');
$("#errortitle").css("color","red");
$("#title").css("border-color","red");
valid=false;
}
else
{
$("#errortitle").html('Title');
$("#errortitle").css("color","black");
$("#title").css("border-color","#ddd");
}
if(metakey.length<6)
{
$("#newpassworderror").html('Invalid New Password');
$("#newpassworderror").css("color","red");
$("#newpassword").css("border-color","red");
valid=false;
}
else
{
$("#newpassworderror").html('New Password');
$("#newpassworderror").css("color","black");
$("#newpassword").css("border-color","#ddd");
}
if(metadis.length<6)
{
$("#newpassworderror").html('Invalid New Password');
$("#newpassworderror").css("color","red");
$("#newpassword").css("border-color","red");
valid=false;
}
else
{
$("#newpassworderror").html('New Password');
$("#newpassworderror").css("color","black");
$("#newpassword").css("border-color","#ddd");
}



var mymethod="post";
var myurl="myphp.php";
var mydata="oldpassword="+oldpassword+"&newpassword="+newpassword+"&cpassword="+cpassword+"&change=yes";

$.ajax({
	
	method:mymethod,
	url:myurl,
	data:mydata,
	success:function(result)
	{
		if(result==1)
		{
	        alert("Password Changed Successfully");
			$("#oldpassword").val("");
			$("#newpassword").val("");
			$("#cpassword").val("");
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














</script>-->
























</body>
</html>