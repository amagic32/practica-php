<form method="post">
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        </br>
        <input type="submit" value="Enviar">
    </div>
</form>

<?php
echo "Hola " . ($_POST["nombre"]);

?>