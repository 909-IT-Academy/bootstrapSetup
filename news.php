<?php
$curl = curl_init();

curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://newsapi.org/v2/top-headlines?country=au&apiKey=00f7b498d6174daeac53548a343345de',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => false,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>