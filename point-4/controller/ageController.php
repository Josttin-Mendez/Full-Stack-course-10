<?php
    $message = "";
    
    if(isset($_POST["fecha_nacimiento"])) {
        $userDate = $_POST["fecha_nacimiento"];
        
        $currentDate = date("Y-m-d");
        
        if($userDate <= $currentDate) {

            $userAge = date_diff(date_create($userDate), date_create($currentDate))->y;
            
            if($userAge >= 18) {
                $message = "Es mayor de edad";
            } else {
                $message = "No es mayor de edad";
            }
        } else {
            $message = "La fecha proporcionada es futura";
        }
    }
?>
