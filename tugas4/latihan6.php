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

while($data = mysqli_fetch_array($result)) {
    echo $data["mhsID"].' '.$data['firstname'].' '.$data['lastname'].' '.$data['age'].'<br>';
  }

?>