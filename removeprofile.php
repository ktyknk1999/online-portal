<?php
$con = mysqli_connect("localhost", "root","","l");
$e = $_REQUEST['email'];

$q = "delete from login where email='$e'";
$r = mysqli_query($con,$q);
if($r)
{
	header("location:loginpageprac.php");
}
else
{
	echo mysqli_error($con);
}

?>