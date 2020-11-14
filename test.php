<?php
$curl = curl_init();
$movieDbUrl = "https://z4vrpkijmodhwsxzc.stoplight-proxy.io/3/movie/";
$token = "?api_key=3f36afe25dfd9dadde3e0c9bd458f64b";
curl_setopt_array($curl, array(
CURLOPT_URL => $movieDbUrl . "211672" . $token,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
"cache-control: no-cache"
),
));

$response = curl_exec($curl);
$err = curl_error($curl);
$response = json_decode($response, true);
$imgPath = "https://image.tmdb.org/t/p/w500" . $response["poster_path"];
echo $imgPath;
curl_close($curl);
?>