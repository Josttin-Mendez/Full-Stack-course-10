<?php
    $message = "";
    if(isset($_POST["user_age"])){
        $userAge = intval($_POST["user_age"]);
        
        if($userAge >= 18){
            $message = "Es mayor de edad";
        } else {
            $message = "No es mayor de edad";
        }
    }
?>
