<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!-- Agregar un estilo básico para el formulario -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        input[type="text"] {
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
    width: 100%;
    margin-bottom: 15px;
}


        .form-container {
             margin-top: 100px;
            background-color: white;
            padding: 100px;
            border-radius: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color:rgb(135, 76, 175);
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color:rgb(151, 84, 196);
        }

        .message {
            color: purple;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <!-- Mostrar mensaje de éxito si existe -->
        @if(session('mensaje'))
            <div class="message">
                {{ session('mensaje') }}
            </div>
        @endif

 <div class="titulo-mesa">Nuevo Pedido</div>

<div class="buscador">
    <input type="text" placeholder="Buscar bandejas">
</div>


        <!-- Formulario -->
        <form action="{{ url('/form') }}" method="POST">
            @csrf
            <label for="nombre">Numero de la Mesa:</label>
            <input type="text" id="numero de la mesa" name="numero" required>
            <label for="nombre">Pedido:</label>
            <input type="text" id="pedido" name="pedido" required>
            <button type="submit">Enviar</button>
        </form>
    </div>

</body>
</html>
