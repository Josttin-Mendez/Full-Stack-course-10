<?php
    $result = 0;
    
    if(isset($_POST["first_number"]) && isset($_POST["second_number"]) && isset($_POST["num_operation"])){
        $firstNumber = $_POST["first_number"];
        $secondNumber = $_POST["second_number"];
        $operation = $_POST["num_operation"];
        $result = 0;

        switch($operation){
            case "Suma":
                $result = $firstNumber + $secondNumber;
                break;
            case "Resta":
                $result = $firstNumber - $secondNumber;
                break;
            case "Multiplicacion":
                $result = $firstNumber * $secondNumber;
                break;
            case "Division":
                $result = $firstNumber / $secondNumber;
                break;
            default:
                $result = "ingrese";
        }
    }
?>
