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

$sql = "SELECT * FROM `contact_us`";
$result = mysqli_query($conn, $sql);
// $num = mysqli_num_rows($result); **return the number of rows in database.
// // echo $num . "<br>";   
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id : " . $row["Id"] . "  Name : " . $row["Name"] . " Email :" . $row["Email"] . " Gender :" . $row["Gender"] . " Subject :" . $row["Subject"] . " Message :" . $row["Message"] . " Time & Date :" . $row["Time & Date"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
