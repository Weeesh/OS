<?php
    session_start();
    if($_POST){


        $reader = fopen("users.csv", "r");
        $writer = fopen("temp.csv", "w");

        $replaced = false;
        
        $newPass = $_POST["pass"];

        while(!feof($reader)){
            $line = fgets($reader);

            if(stristr($line, $_SESSION["user"])){
                $line = $_SESSION["user"].",".$newPass.PHP_EOL;
                $replaced = true;


            }
            fputs($writer,$line);
        }

        fclose($reader);
        fclose($writer);

        if($replaced){
            rename('users.csv','tempo.csv');
            rename('temp.csv', 'users.csv');

            unlink('tempo.csv');


            echo "edit success";
            header("Location: ../os/mainpage.php");
        }else{
            echo "edit fail";
            header("Location: ../os/mainpage.php");
        }


    }else{
        echo "post error";
    }

?>
