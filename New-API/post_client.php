<?php
$url = 'localhost/proyekweb/post.php';

$header = array(
'username: Noval',
'token: c4ca4238a0b923820dcc509a6f75849b'
);

$data = array(
'nama' => 'Ahmad Dani',
'jenis_kelamin' => 'Laki-laki', 
'umur' => '20',
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//menggunakan method post
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);

echo $result;