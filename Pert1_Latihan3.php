<html>
<head><title>Variabel Static</title></head>
<body><h1>Variabel Static</h1>
<?php
 Function test()
 {
 Static $a=0; 
 echo $a ; 
 echo "<br>";
 $a++;
 }
 Test();
 Test();
 Test();
 Test();
 Test();
?>
</body>
</html> 