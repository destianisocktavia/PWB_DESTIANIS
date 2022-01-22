<?php
include "koneksi.php";
$title= $_POST['title'];
$author = $_POST['author'];
$abstraksi = $_POST['abstraksi'];
$content = $_POST['content'];
$time=date("d M Y, H:i");
$ID = $_POST['id'];
//$lead = str_replace("\r\n","<br>",$lead);
//$content= str_replace("\r\n","<br>",$content);
$update="UPDATE articles SET judul='$title', penulis='$author', lead='$abstraksi', content='$content', waktu='$time' WHERE id ='$ID'";
$hasil=mysqli_query($conn,$update);
// $hasil=mysql_db_query($dbname,$update);
if ($hasil) {
echo "Artikel berhasil di update<br>";
echo "<a href=\"tampil_articles.php\">List</a>";
} else {
echo "Artikel gagal di update";
}
?>