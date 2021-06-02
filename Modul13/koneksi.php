<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "artikel_db";
//lakukan koneksi dengan mysql
$koneksi = mysqli_connect($dbhost,$dbuser,$dbpass);
if(!$koneksi)
{
 echo "Tidak dapat terhubung dengan database";
 exit;
}
//pilih database
$pilih_db = mysqli_select_db($koneksi, $dbname);
if(!$pilih_db)
{
 echo "Tidak dapat memilih database";
 exit;
}
?> 