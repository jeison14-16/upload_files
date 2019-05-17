<?php
include ("database.php");

//1.traer los trader_cdlrisefall3methods


$idNumber = $_POST["ide"];

$file_name = $_FILES['photo']['name'];//get file name
$file_type = $_FILES['photo']['type'];//get file type
$file_size = $_FILES['photo']['size']/1024;//get file defaul: kb


$file_tmp = $_FILES['photo']['tmp_name'];
//echo $idNumber."<br>".$file_name."<br>".$file_type."<br>".$file_size."<br>".$file_tmp;



move_uploaded_file( $_FILES['photo']['tmp_name'],"photos/".$_FILES['photo']['name']);


$photo_url_db = "photos/".$_FILES['photo']['name'];
//query
$sql="INSERT INTO users (id_number,photo)VALUES($idNumber, 'photo_url_db')";
//execute query
$conn->query($sql);

echo "<script languaje='javascript'> alert(':::User has been registered:::')</script>";
header ("refresh: 0; url=index.html");
 ?>
