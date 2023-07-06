<?php
    include "./service/Users.php";
    include "./model/User.php";
    
    function getUsers(){
        $usersQuery = getAllUsers(); 
        $userList = array();
        
        while($row = mysqli_fetch_assoc($usersQuery)){
            $user = new User(
                $row["id"],
                $row["nombre"],
                $row["apellido"],
                $row["cedula"],
            );
            $userList[] = $user;
        }
        return $userList;
    }
?>