<?php
    include "connection.php";

    function getAllUsers(){
        return mysqli_query(CONNECTION, "SELECT * FROM usuarios");
        
    }

    function getUserByIdNumber($idNumber){
        return mysqli_query(CONNECTION, "SELECT * FROM usuarios WHERE cedula: $idNumber");
    }
?>