<!doctype html>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("lifecare",$con);
?>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
       <?php 
$query = "select * from tbllogin where username='".$_REQUEST["txtusername"]."' and password='".$_REQUEST["txtpassword"]."'";
$res = mysql_query($query);

$no = mysql_num_rows($res);
$row = mysql_fetch_array($res);



if(($row[1]==$_REQUEST["txtusername"]) && ($row[2]==$_REQUEST["txtpassword"]))
{
	//$row = mysql_fetch_array($res);
	session_start();
	$_SESSION["username"] = $row[1];
	$_SESSION["userid"] = $row[7];

	
	if($row[6] == "admin")
	{	
		echo "<script>document.location='admin/index.php';</script>";
	}
	else if($row[6] =="customer")
	{
		echo "<script>document.location='customer/index.php';</script>";
	}
}
else
{	
	echo "<script>document.location='login.php?&invalid'</script>";
}



?>
           
</body>
</html>