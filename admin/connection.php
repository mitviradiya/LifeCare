<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("lifecare",$con);
if(isset($_SESSION['username']))
{	
}
else
{
	echo "<script>document.location='../index.php'</script>";
}

?>
