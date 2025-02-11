<!DOCTYPE html>
<html>
<head>
    <title>Nuevo mensaje del formulario</title>
</head>
<body>
    <h1>Has recibido un nuevo mensaje</h1>
    <a href="https://decorapro.mx/"> <img src="https://decorapro.mx/wp-content/uploads/2023/01/Decora-Pro-logo-Vertical-verde-2.png" width="200px" alt=""></a>
    <p><strong>Nombre:</strong> {{ $datos['nombre'] }}</p>
    <p><strong>Email:</strong> {{ $datos['email'] }}</p>
    <p><strong>Producto:</strong> {{ $datos['producto'] ?? 'No especificado' }}</p>
    <p><strong>Teléfono:</strong> {{ $datos['telefono'] }}</p>
    <p><strong>Mensaje:</strong> {{ $datos['mensaje'] }}</p>
</body>
</html>
