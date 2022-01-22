<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pwd";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql2 = "INSERT INTO tbl_mhs (firstname, lastname, age) VALUES ('Karina', 'Suwandi', '29'),('Glenn', 'Gandari', '32')";

if (mysqli_query($conn, $sql2)) {
    echo "Succesfully";
}else{
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>