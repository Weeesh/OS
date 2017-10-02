<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata, true);

$myfile = fopen("users.csv", "r") or die("Unable to open file!");
echo fread($myfile,filesize("users.csv"));
fclose($myfile);

?>