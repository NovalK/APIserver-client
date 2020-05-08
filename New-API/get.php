<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mahasiswa";

$conn = new mysqli($servername, $username, $password, $dbname);

$smethod = $_SERVER['REQUEST_METHOD'];
$headers = apache_request_headers();
if(isset($_GET['id'])==1){
$username = $headers['username'];
$token = $headers['token'];
$id = $_GET['id'];
}

if ($smethod=='GET') {
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
                $result['status']['description'] = 'Wrong Token';
            }
                else
				{
		            $sql = "SELECT nama, jenis_kelamin, alamat, umur FROM tbl_mahasiswa where id='$id'";
		            $q = $conn->query($sql);
					$result['results'] =  $q->fetch_all(MYSQLI_ASSOC);
			}
				
        }
}
else{
     $result['status']['code'] = 400;
     $result['status']['description'] = 'Error Request';
}

echo json_encode($result);
?>