<?php 
$con=mysql_connect("localhost","root","","work_reporting");
if ($con) {
	echo "";
}
else
{
	echo "DB Not Connected";
}
?>