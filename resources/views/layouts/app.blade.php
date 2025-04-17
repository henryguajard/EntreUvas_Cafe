<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Admin - Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a2d5d0caaa.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('admin.productos.index') }}">Panel Admin</a>
        </div>
    </nav>

    @yield('content')

</body>
</html>