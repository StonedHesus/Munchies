<?php

$value = isset($_GET['query']) ? $_GET['query'] : " ";

$searchQuery = "SELECT * FROM LOCATIONS WHERE ";

$keywords = explode(' ', $value);

foreach ($keywords as $keyword){

    $searchQuery .= "keywords LIKE '%".$keyword."%' OR ";
}

$searchQuery = substr($searchQuery, 0, strlen($searchQuery)-4);


$conn = mysqli_connect("localhost", "root", "password", "tutorials");

$query = mysqli_query($conn, $searchQuery);
$result_count = mysqli_num_rows($query);

echo $value;
