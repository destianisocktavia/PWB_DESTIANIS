<?php
include "koneksi.php";
$articleID = $_GET['articleID'];
// Query satu record artikel dari tabel sesuai nilai $articleID
$perintah="SELECT * FROM articles WHERE id =\"$articleID\"";
$hasil=mysqli_query($conn,$perintah);
$row=mysqli_fetch_array($hasil);
$time=date("d M Y, H:i");
?>
<h1>Form Berita</h1>
<form name=article method=post action=update_article.php>
    <input type="hidden" name="id" value="<?php echo "$row[articleID]"?>">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="18%">Judul</td>
            <td width="2%">:</td>
            <td width="80%"><input type="text" name="title" size="50" class="masukan" value="<?php echo "$row[judul]" ?>"></td>
        </tr>
    <tr>
        <td>Penulis</td>
        <td>:</td>
        <td><input type="text" name="author" size="50" class="masukan" value="<?php echo "$row[penulis]" ?>"></td>
    </tr>
    <tr valign="top">
        <td>Lead</td>
        <td>:</td>
        <td><textarea name="abstraksi" rows="4" cols="50"><?php echo "$row[lead]" ?></textarea></td>
    </tr>
    <tr valign="top">
        <td>Content</td>
        <td>:</td>
        <td><textarea name="content" rows="4" cols="50"><?php echo "$row[content]" ?></textarea></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
        <input type="submit" name="masuk" value="Update" class="tombol">
        <input type="reset" name="hapus" value="Cancel" class="tombol"></td>
    </tr>
    </table>
</form>