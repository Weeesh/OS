<?php
    session_start();
    if($_POST){


        $reader = fopen("products.csv", "r");
        $writer = fopen("prodtemp.csv", "w");

        $replaced = false;

        $newName = $_POST["Nname"];
        $newPrice = $_POST["price"];
        $newStock = $_POST["stock"];
        $oldName = $_POST["Pname"];

        while(!feof($reader)){
            $line = fgets($reader);

            if(stristr($line, $oldName)){
                $line = $newName.",".$newPrice.",".$newStock.",".PHP_EOL;
                $replaced = true;


            }
            fputs($writer,$line);
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
