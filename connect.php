<?php

$username="root";
$password="";
$server="localhost";
$database="internshala";


$con=mysqli_connect($server,$username,$password,$database);


if($con){
	
		
}else{
	die("no connection" . mysql_connect_error());
}

?>