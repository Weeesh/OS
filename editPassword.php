<?php
    session_start();
    if($_POST){


        $reader = fopen("users.csv", "r");
        $writer = fopen("userstemp.csv", "w");

        $replaced = false;

        $password = $_POST["pass"];

        while(!feof($reader)){
            $line = fgets($reader);

            if(stristr($line, $_SESSION["user"])){
                $line = $_SESSION["user"].",".$password.PHP_EOL;
                $replaced = true;
            }
            fputs($writer,$line);
        }

        fclose($reader);
        fclose($writer);

        if($replaced){
            rename('users.csv','oldusers.csv');
            rename('userstemp.csv', 'users.csv');

            unlink('oldusers.csv');

            header("Location: ../os/mainpage.php");
            echo "edit success";
        }else{
            echo "edit fail";
        }


    }else{
        echo "post error";
    }

?>
