<?php
include "koneksi.php";
$perintah = "SELECT * FROM articles ORDER BY articleID DESC";
$hasil = mysqli_query($koneksi, $perintah);
echo ("
<h2>List Artikel</h2>
<br><UL>
");
while ($row = mysqli_fetch_array($hasil)) {
    echo ("
 <LI>$row[1] &nbsp;$row[2] &nbsp; $row[waktu] &nbsp;<a
href=\"edit_artikel.php?articleID=$row[0]\">Edit</a>
 &nbsp;<a
href=\"delete_artikel.php?articleID=$row[0]\">Hapus</a></LI><br>");
}
echo ("</table>");
echo "<br><a href=\"add_artikel.php\">Tambah</a>";
echo "<br><a href=\"isian_artikel.php\">Form</a>";
?>