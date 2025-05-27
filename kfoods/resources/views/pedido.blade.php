<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Pedido</title>
</head>
<body>
    <h1>Formulario de Pedido</h1>
    <form action="#" method="POST">
        @csrf
        <label for="mesa">Número de Mesa:</label><br>
        <input type="number" id="mesa" name="mesa" required><br><br>

        <label for="pedido">Descripción del Pedido:</label><br>
        <textarea id="pedido" name="pedido" rows="4" cols="30" required></textarea><br><br>

        <label for="estado">Estado:</label><br>
        <select id="estado" name="estado">
            <option value="pendiente">Pendiente</option>
            <option value="en_proceso">En Proceso</option>
            <option value="servido">Servido</option>
        </select><br><br>

        <button type="submit">Enviar Pedido</button>
    </form>
</body>
</html>
