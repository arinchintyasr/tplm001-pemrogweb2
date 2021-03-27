<?php
$file = fopen("Pert5_Latihan1_Test1.txt","r");
while(! feof($file))
{
echo fgets($file). "<br />";
}
fclose($file);
?>