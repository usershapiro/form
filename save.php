<?php
// $_GET
// $_POST
// $_COOKIE
// $_FILES
// $_REQUEST
// $_ENV
// $_SERVER
// $_SERVER

$name = $_POST["name"];
$price = $_POST["price"];
$stock = $_POST["stock"];

echo $line = "Name: $name, Price: $price, Stock: $stock .PHP.EOL";

file_put_contents("./products.txt",$line , FILE_APPEND);

header("location: thanks.php");