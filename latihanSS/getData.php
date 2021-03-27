<?php

header("Access-Control-Allow-Origin: *");
/*reply data dalam JSON */
 
include('connection.php');error_reporting(E_ALL ^ E_DEPRECATED);

$par = $_GET['par'];

if($par=="dataCustomer")
{
	$sql = "select * from customer order by id DESC";
	$query 	= mysqli_query($con, $sql); 

	$data = array();
	while($row = mysqli_fetch_object($query)){
	   $data []= $row;
	}
	echo json_encode($data);
}else
{
	
}
?>