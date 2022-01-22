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
$jumlah =mysqli_num_rows($result);
echo "jumlah record : ".$jumlah;

?>