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
$sql2 = "DELETE FROM tbl_mhs WHERE lastname='Ocktavia' ";
    if (mysqli_query($conn, $sql2)) {
        echo "Successfully";
    }else{
        echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
    }

?>