<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <ul>
        <li>
            <a href="/usuarios">Añadir Usuario</a>
        </li>
        <li>
            <a href="/direccion/crear">Añadir Dirección</a>
        </li>
        <li>
            <a href="/asignar">Asignar Dirección a Usuario</a>
        </li>
    </ul>
    <hr>
    @yield('content')
</body>
</html>