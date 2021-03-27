<?php

	 header("Access-Control-Allow-Origin: *");
	/**jika id = 0,maka akan dilakukan insert, jika tidak update berdasarkan id */
	include('connection.php');error_reporting(E_ALL ^ E_DEPRECATED);

	$par = $_GET['par'];
	
	if($par=="updateCustomer")
	{
		$idCustomer = $_GET['idCustomer'];
		$noKtp = $_GET['noKtp'];
		$nama = $_GET['nama'];
		$alamat = $_GET['alamat'];

		$updateDevice = "UPDATE customer SET ktp ='$noKtp', nama ='$nama', alamat = '$alamat' WHERE id='$idCustomer'";
		mysqli_query($con,$updateDevice);
		echo $result = mysqli_affected_rows($con);
	}else
	{
	
	}

	
?>
