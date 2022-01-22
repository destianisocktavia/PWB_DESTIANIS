<?php
include "koneksi.php";

$hasil = "SELECT * FROM articles order by id desc";
$result = mysqli_query($conn, $hasil);
echo"<h2>List Artikel</h2><br><ul>";

while($row = mysqli_fetch_array($result)) {

     echo("<LI>$row[1] &nbsp;$row[2] &nbsp; $row[waktu] &nbsp;
    <a href=\"edit.php?articleID=$row[0]\">Edit</a>&nbsp;
    <a href=\"delete.php?articleID=$row[0]\">Hapus</a></LI><br>");
  }
  echo "</ul>"
?>