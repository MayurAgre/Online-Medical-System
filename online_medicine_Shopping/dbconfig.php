<?php

// session_start();
// define("server","sql105.epizy.com",true);
// 	define("user","epiz_27310203",true);
// 	define("password","7dTZHm33KX7",true);
// 	define("database","epiz_27310203_onlinemedicine",true);
// 	function iud($query)
// 	{
// 		$cid=mysqli_connect(server,user,password,database) or die("connection error");
// 	$result=mysqli_query($cid,$query);
// 	$n=mysqli_affected_rows($cid);
// 	mysqli_close($cid);
// 	return $n;
// 	}
	
// function select($query)
// {
// 	$cid=mysqli_connect(server,user,password,database) or die("connection error");
// 	$result=mysqli_query($cid,$query);
// 	mysqli_close($cid);
// 	return $result;
// }


session_start();
define("server","localhost",true);
	define("user","root",true);
	define("password","",true);
	define("database","online_medicine",true);
	function iud($query)
	{
		$cid=mysqli_connect(server,user,password,database) or die("connection error");
	$result=mysqli_query($cid,$query);
	$n=mysqli_affected_rows($cid);
	mysqli_close($cid);
	return $n;
	}
	
function select($query)
{
	$cid=mysqli_connect(server,user,password,database) or die("connection error");
	$result=mysqli_query($cid,$query);
	mysqli_close($cid);
	return $result;
}











?>
	