<?php
$postdata = file_get_contents("php://input");
$request = json_decode($postdata, true);

$myfile = fopen("users.csv", "w") or die("Unable to open file!");
$user = $request["user"];
fwrite($myfile, $uname);
$pass = $request["pass"];
fwrite($myfile, $pass);
fclose($myfile);


?>