<?php 

//get the data from the form
$productname = $_POST['productname'];
$productprice = $_POST['productprice'];

//------------------------- INSERT DATA TO DB --------------------------


//1 . Make a connection to your database
$conn = new mysqli("localhost", "motors", " ", "motor_parts");

// SQL STATEMENT -> Programming of lang. of database
$sql = "INSERT INTO motorpartsinventory (productname, productprice) VALUES ('".$productname."', '".$productprice."')";

// is to run the sql code in php
$conn->query($sql);

//redirect
header('location: index.php');
