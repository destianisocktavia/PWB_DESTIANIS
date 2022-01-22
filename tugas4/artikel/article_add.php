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
$judul= $_POST['title'];
$penulis = $_POST['author'];
$lead = $_POST['abstraksi'];
$isi = $_POST['content'];
$time=date("Y-m-d H:i:s");
$lead = str_replace("\r\n","<br>",$lead);
$content = str_replace("\r\n","<br>",$isi);

$sql2 = "INSERT INTO articles (judul, penulis,lead,content,waktu) VALUES ('$judul','$penulis','$lead','$isi','$time')";
    if (mysqli_query($conn, $sql2)) {
        echo "<h3 align=center>Proses penambahan artikel berhasil</h3>";
         echo "<A href=\"tampil_articles.php\">List</A>";
    }else{
        echo "<h2 align=center>Proses penambahan artikel tidak
        berhasil</h2>";
    }

?>