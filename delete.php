<?php
// mysql conect with php
$serverName = "localhost";
$userName = "root";
$password = "";
$dataBase = "wedding_zone";

// create a conection
$conn = mysqli_connect($serverName, $userName, $password, $dataBase);
if (!$conn)
    die(mysqli_connect_error());
// delete data
$sql = "DELETE FROM `contact_us` WHERE `contact_us`.`Id` = 5"; // delete data or row from database.
$result = mysqli_query($conn, $sql);
if ($result)
    echo "Delete Successfull.";
else
    echo "Delete not posible for some tecnical issue.";
mysqli_close($conn);
