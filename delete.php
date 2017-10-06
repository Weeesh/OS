<?php
    session_start();
    if($_POST){


        $reader = fopen("products.csv", "r");
        $writer = fopen("prodtemp.csv", "w");

        $replaced = false;

        $oldName = $_POST["Pname"];

        while(!feof($reader)){
            $line = fgets($reader);

            if(!stristr($line, $oldName)){
                fputs($writer,$line);
            }else{
                $replaced = true;
                
            }
            
        }

        fclose($reader);
        fclose($writer);

        if($replaced){
            rename('products.csv','prodtempo.csv');
            rename('prodtemp.csv', 'products.csv');

            unlink('prodtempo.csv');


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
