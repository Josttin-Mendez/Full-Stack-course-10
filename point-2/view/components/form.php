<?php include "./controller/ageController.php"; ?>


<form  method="post" action="">
    <h2>Calcular edad</h2>
    <div class="form_row">
        <div>
            <label for="user-age">
                Ingrese la edad a verificar
            </label>
            <input 
            id="user-age" 
            type="text"
            name="user_age"
            placeholder="00"
            >
        </div>
    </div>
    <button>Calcular</button>
</form>