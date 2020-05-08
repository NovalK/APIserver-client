<?php
$url = 'localhost/proyekweb/get.php';

$header = array(
'username: Noval',
'token: c4ca4238a0b923820dcc509a6f75849b'
);

$data = array (
    'id' => '1'
    );
    
    $params = http_build_query($data);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url.'?'.$params );
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$result = curl_exec($ch);
echo $result;
?>