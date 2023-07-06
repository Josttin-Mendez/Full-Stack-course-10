<?php include "./controller/userController.php" ?>

<div class="table_container">
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cédula</th>
        </tr>
        <?php
            $users = getUsers();
            foreach($users as $user){
        ?>
            <tr>
                <td><?php echo $user->getId(); ?></td>
                <td><?php echo $user->getName(); ?></td>
                <td><?php echo $user->getLastName(); ?></td>
                <td><?php echo $user->getIdNumber(); ?></td>
            </tr>
        <?php } ?>
    </table>
</div>