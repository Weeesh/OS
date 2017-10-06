<?php
    session_start();
    if($_POST){

        $prodName = $_POST["Pname"];
        $amt = $_POST["amount"];

        $reader = fopen("products.csv", "r");
        $writer = fopen("temp.csv", "w");
        $cart = fopen("cart.csv", "a") or die("Unable to open file!");

        $deleted = false;
        while(!feof($reader)){
            $line = fgets($reader);

            if(stristr($line, $prodName)){
                list($fname, $fprice,$fstock) = explode(",", $line);


                $newStock = $fstock - $amt;

                $line = $fname.",".$fprice.",".$newStock.PHP_EOL;
                
                $total = $amt * $fprice;

                $cartLine = $_SESSION["user"].",".$fname.",".$total.",".$amt.PHP_EOL;


                $deleted = true;

                
                fputs($cart,$cartLine);
                
            }
            fputs($writer, $line);
        }

        fclose($reader);
        fclose($writer);
        fclose($cart);
        if($deleted){
            rename('products.csv','old.csv');
            rename('temp.csv','products.csv');

            unlink('old.csv');

            echo "deleted success";
            
        }else{
            echo "could not find product error";
        }
    }else{
        echo "post error";
    }

    header("Location: ../os/mainpage.php");


?>
