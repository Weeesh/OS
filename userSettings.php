<?php

    if($_POST){
        session_start();
        
        $userFile = file("users.csv");
        $accessData = array();

        $user = $_POST["user"];
        $pass = $_POST["pass"];

        foreach($userFile as $line){
            list($fileUser,$filePass) = explode(',', $line);

            $accessData[($fileUser)] = array(
                "password" => trim($filePass)
            );
        }

        if(array_key_exists($user, $accessData) && $pass == $accessData[$user]["password"]){
            
            

        }else{
            
            header('Location: '."index.php");
        }


    }else{
        echo "post error";
    }

?>
