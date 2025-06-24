<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Formulario de Registro</h1>
<form id="formulario">
    <div style="padding: 8px">
    <label for="nombre">Nombre de Usuario:</label>
    <input type="text" id="nombre" name="nombre" required> <br>
    </div>
    <div style="padding: 8px">
    <label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="email" required><br>
    </div>
    <div style="padding: 8px">
    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" min="18" max="99" required><br>
    </div>
    <div style = "padding: 8px">
        <button type="submit">Registrar</button>
    </div>

</form>
</body>
<script src="validacion.js"></script>
