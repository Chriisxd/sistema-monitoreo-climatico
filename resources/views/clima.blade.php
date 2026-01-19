<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clima Segun Ciudad Práctica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        .container {
            width: 500px;
            margin: 40px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        input {
            flex: 1;
            padding: 8px;
        }

        button {
            padding: 8px 12px;
            cursor: pointer;
        }

        .card {
            background: #eef3f7;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 6px;
        }

        .eliminar {
            color: red;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Clima Segun Ciudad Práctica</h1>

    <form method="GET">
        <input type="text" name="ciudad" placeholder="Ingrese ciudad" required>
        <button type="submit">Agregar</button>
    </form>

    @foreach($ciudades as $c)
    <div class="card">
        <strong>{{ $c->ciudad }}</strong>

        <p>🌡️ {{ $c->temperatura }} °C</p>
        <p>☀️ {{ $c->estado }}</p>
        <p>💧 {{ $c->humedad }} %</p>

        <a class="eliminar" href="/clima/eliminar/{{ $c->id }}">Eliminar</a>
    </div>
@endforeach
</div>

</body>
</html>