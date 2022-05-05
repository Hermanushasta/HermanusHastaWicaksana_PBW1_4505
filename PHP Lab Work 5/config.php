<?php
	$server="localhost";
	$username="root";
	$pass="";
	$dbname="modul5";
	//buat koneksi dan cek disini
	$conn = mysqli_connect ($server, $username, $pass, $dbname);
	if (!$conn){
		die ("Connecction failed : ".mysqli_connect_error());
	}
	//echo "Connected Succesfully";
?>