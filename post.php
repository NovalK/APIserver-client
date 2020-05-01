<?php
	header("Content-Type:application/json");
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mahasiswa";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

	// tangkap method request
	$smethod = $_SERVER['REQUEST_METHOD'];

	// inisialisasi variable hasil
	$result = array();

	// kondisi metode
	if($smethod == 'POST'){
		// tangkap input
		$id = $_POST['id'];
		$Nama = $_POST['Nama'];
		$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
		$Umur = $_POST['Umur'];

		// insert data
		$sql = "INSERT INTO mahasiswa (
					id,
					Nama,
					Jenis_Kelamin,
					Umur)
				VALUES (
					'$id',
					'$Nama',
					'$Jenis_Kelamin',
					'$Umur')";
		$conn->query($sql);

		$result['status']['code'] = 200;
		$result['status']['description'] = "1 data terinput";
		$result['result'] = array(
			"id"=>$id,
			"Nama"=>$Nama,
			"Jenis_Kelamin"=>$Jenis_Kelamin,
			"Umur"=>$Umur);

	}else{
		$result['status']['code'] = 400;
	}

	// parse ke format json
	echo json_encode($result);
?>