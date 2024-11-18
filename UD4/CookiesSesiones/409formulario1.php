<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="409formulario2.php" method="post">

        <label for="nombre">Nombre y Apellidos:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="url">URL de Página Personal:</label>
        <input type="url" id="url" name="url" required>
        <br><br>

        <label>Sexo:</label>
        <input type="radio" id="masculino" name="sexo" value="masculino" required>
        <label for="masculino">Masculino</label>
        <input type="radio" id="femenino" name="sexo" value="femenino" required>
        <label for="femenino">Femenino</label>
        <br><br>
        <button type="submit" value="Enviar">Enviar</button>
    </form>
</body>
</htmL>
