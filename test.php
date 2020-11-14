<?php
$movieDbUrl = "https://z4vrpkijmodhwsxzc.stoplight-proxy.io/3/movie/";
$token = "?api_key=3f36afe25dfd9dadde3e0c9bd458f64b";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moviedb";
$tmp = '[{"id": 16, "name": "Animation"}, {"id": 35, "name": "Comedy"}, {"id": 10751, "name": "Family"}]';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT id, genres, original_title FROM moviedb";
$result = $conn->query($sql);
var_dump($result);
?>