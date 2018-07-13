 <?php


$myFile = "cpfs.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = $_GET['uid']."\n";
fwrite($fh, $stringData);
fclose($fh);
header("Location: http://localhost/cpf.html");
die();
?> 
