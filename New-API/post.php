<?php 
	header('Content-Type: application/json');

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mahasiswa";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$smethod = $_SERVER['REQUEST_METHOD'];
	$headers = apache_request_headers();
	if(isset($_POST['nama'])==1){
		$username = $headers['username'];
		$token = $headers['token'];
		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$umur = $_POST['umur'];	
	}
	
	$result = array();

	if ($smethod=='POST') {
        	if (empty($username)||empty($token)) {
				$result['status']['code'] = 400;
			    $result['status']['description'] = 'Error Headers';
			}
			else {

   				$sql = "SELECT COUNT(username) as jumlah FROM `api_user` where username = '$username' AND token = '$token'";
        		$result1 = $conn->query($sql);
        		$cek = $result1->fetch_assoc();

       			if ($cek['jumlah'] == 0) {
						$result['status']['code'] = 400;
					    $result['status']['description'] = 'wrong Token';	        
				}
				else
				{	

		            $result['status']['code'] = 'success';
		            $result['status']['description'] = 'Request OK';
					$sql = "INSERT INTO tbl_mahasiswa (nama, jenis_kelamin, umur) VALUES ('$nama', '$jenis_kelamin', '$umur');";
					$conn->query($sql);
					$result['results'] = '1 row inserted';
			}
				
        }
	}
        else{
            $result['status']['code'] = 400;
            $result['status']['description'] = 'Error Request';
        }
		
        echo json_encode($result);
