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

// sql to create table
$sql = "CREATE TABLE tbl_mhs (
mhsID INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30),
lastname VARCHAR(30),
age int(50)
)";

if (mysqli_query($conn, $sql)) {
    $sql2 = "INSERT INTO tbl_mhs (firstname, lastname, age) VALUES ('Destianis', 'Ocktavia', '20')";
    if (mysqli_query($conn, $sql2)) {
        echo "Succesfully";
    }else{
        echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
    }
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>