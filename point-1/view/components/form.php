<?php include "./controller/operationController.php"?>

<form method="post">
    <h2>Calculadora</h2>
    <div class="form_row">
        <div>
            <label for="first-number">Primer número</label>
            <input type="text" id="first-number" name="first_number" placeholder="00"> 
        </div>
        <div>
            <label for="second-number">Segundo número</label>
            <input type="text" id="second-number" name="second_number" placeholder="00"> 
        </div>
        <div>
            <label for="operation">Seleccione el tipo de operación</label>
                <select name="num_operation" id="operation">
                    <option value="Suma">Suma</option>
                    <option value="Resta">Resta</option>
                    <option value="Multiplicacion">Multiplicación</option>
                    <option value="Division">División</option>
                </select>
        </div>
    </div>
    <button>Calcular</button>
</form>
