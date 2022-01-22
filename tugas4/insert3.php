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
$hasil = "SELECT * FROM tbl_mhs";
$result = mysqli_query($conn, $hasil);
$sql2 = "INSERT INTO tbl_mhs (firstname, lastname, age) VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[age]')";
    if (mysqli_query($conn, $sql2)) {
        echo "1 record added";
    }else{
        echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
    }

?>