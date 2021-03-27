<?php

	 header("Access-Control-Allow-Origin: *");
	/**jika id = 0,maka akan dilakukan insert, jika tidak update berdasarkan id */
	include('connection.php');error_reporting(E_ALL ^ E_DEPRECATED);

	$par = $_GET['par'];
	
	if($par=="deleteCustomer")
	{
		$idCustomer = $_GET['id'];

		$updateDevice = "DELETE from customer where id = '$idCustomer'";
		mysqli_query($con,$updateDevice);
		echo $result = mysqli_affected_rows($con);
	}else
	{
	
	}

	
?>
