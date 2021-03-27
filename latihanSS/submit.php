<?php
 header("Access-Control-Allow-Origin: *");
include('connection.php');error_reporting(E_ALL ^ E_DEPRECATED);

$par = $_GET['par'];
 
if($par=="simpanCustomer")
{
	$noKtp = $_GET['noKtp'];
	$nama = $_GET['nama'];
	$alamat = $_GET['alamat'];
	
	$insertCusotmer= "INSERT INTO customer(ktp, nama, alamat)
					VALUES ('$noKtp', '$nama', '$alamat')";
	mysqli_query($con,$insertCusotmer);
	echo $result = mysqli_affected_rows($con);
	
}else
{

}
?>