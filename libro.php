<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro de Reclamaciones - TechWorld</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />

    <!-- Estilos personalizados -->
    <link href="css/Estilos.css" rel="stylesheet" />

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #333;
        }

        .imagen-proporcional-logo {
            max-width: 20%;
            height: auto;
            display: block;
        }

        .imagen-proporcional-minis {
            max-width: 10%;
            height: auto;
            display: block;
        }

        .contenedor {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .footer {
            background-color: #222;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .footer-section h5 {
            border-bottom: 2px solid white;
            padding-bottom: 5px;
        }

        .footer a {
            color: white;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header data-bs-theme="dark">
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="index.php">
                    <img src="Imagenes/Logo.jpg" alt="Logo de TechWorld" class="imagen-proporcional-logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="contenedor">
                    <a href="Nosotros.php" class="btn btn-outline-light ms-auto">Nosotros</a>
                    <h2 style="color: white;">|</h2>
                    <img src="Imagenes/Login.jpg" alt="Icono de inicio de sesión" class="imagen-proporcional-minis" />
                    <a href="Login.php" class="btn btn-outline-light ms-auto">Login</a>
                    <h2 style="color: white;">|</h2>
                    <img src="Imagenes/Carrito.jpg" alt="Icono de carrito de compras" class="imagen-proporcional-minis" />
                    <a href="Carrito.php" class="btn btn-outline-light ms-auto">Carrito</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Libro de Reclamaciones -->
    <div class="container my-5">
        <h2>Libro de Reclamaciones</h2>
        <p>Por favor, completa el siguiente formulario para registrar tu reclamo:</p>

        <form action="procesar_reclamo.php" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombres:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellidos:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
            <div class="mb-3">
                <label for="detalle" class="form-label">Detalles del Reclamo:</label>
                <textarea class="form-control" id="detalle" name="detalle" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Reclamo</button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-white py-4">
        <div class="container d-flex justify-content-between">
            <div>
                <h5>Contacto</h5>
                <p><a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank">Página de Facebook</a></p>
                <p>Teléfono: +987 654 321</p>
                <p>Email: abcdefg@gmail.com</p>
            </div>
            <div>
                <h5>Atención al Cliente</h5>
                <ul class="list-unstyled">
                    <li><a href="terminos.php">Términos y Condiciones</a></li>
                    <li><a href="orden.php">Orden de Servicio</a></li>
                    <li><a href="libro.php">Libro de Reclamaciones</a></li>
                    <li><a href="bonos.php">Bonos y Promociones</a></li>
                </ul>
            </div>
            <div>
                <h5>TechWorld</h5>
                <p>© 2025 TechWorld. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>

</body>

</html>
