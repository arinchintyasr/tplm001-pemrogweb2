<?php
 $connect = mysqli_connect("localhost","root","");
mysqli_select_db($connect, "lat_dbase");
$hasil= mysqli_query($connect, "select * from tbl_mhs");
$hit=mysqli_num_rows($hasil);
echo "jumlah record $hit";
?>