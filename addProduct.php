<?php
$myfile = fopen("products.csv", "a") or die("Unable to open file!");
$name = $_POST["Pname"];
fwrite($myfile, $name);
fwrite($myfile, ',');
$price = $_POST["price"];
fwrite($myfile, $price);
fwrite($myfile, ',');
$stock = $_POST["stock"];
fwrite($myfile, $stock);
fwrite($myfile, ',');
fwrite($myfile,"\n");
fclose($myfile);

header('Location: '."mainpage.php");

?>