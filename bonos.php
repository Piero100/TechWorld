<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonos y Promociones - TechWorld</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />
    <link href="css/Estilos.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            color: #333;
        }

        .imagen-proporcional-logo {
            max-width: 20%;
            height: auto;
            display: block;
        }

        .contenedor {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .imagen-proporcional-minis {
            max-width: 10%;
            height: auto;
            display: block;
        }

        .container {
            width: 80%;
            margin: 20px auto;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }

        .grid-item {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .grid-item img {
            max-height: 100px;
            object-fit: contain;
        }

        .cart-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .cart-button:hover {
            background-color: #0056b3;
        }

        .footer {
            background-color: #222;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            max-width: 1000px;
            margin: 0 auto;
        }

        .footer-section {
            flex: 1;
            margin: 10px;
        }

        .footer-section h3 {
            margin-bottom: 10px;
            border-bottom: 2px solid white;
            padding-bottom: 5px;
        }

        .footer-section ul {
            list-style-type: none;
            padding: 0;
        }

        .footer-section ul li {
            margin: 5px 0;
        }

        .footer-section ul li a {
            color: white;
            text-decoration: none;
        }

        .footer-section ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- CABECERA -->
    <header data-bs-theme="dark">
        <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="index.php">
                    <img src="Imagenes/Logo.jpg" alt="TechWorld" class="imagen-proporcional-logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="contenedor">
                    <a href="Nosotros.php" class="btn btn-outline-light ms-auto">Nosotros</a>
                    <h2 style="color: white;"> | </h2>
                    <img src="Imagenes/Login.jpg" alt="Imagen" class="imagen-proporcional-minis" />
                    <a href="Login.php" class="btn btn-outline-light ms-auto">Login</a>
                    <h2 style="color: white;"> | </h2>
                    <img src="Imagenes/Carrito.jpg" alt="Imagen" class="imagen-proporcional-minis" />
                    <a href="Carrito.php" class="btn btn-outline-light ms-auto">Carrito</a>
                </div>
            </div>
        </div>
    </header>

    <!-- CUERPO -->
    <main class="container">
        <h2>Bonos y Promociones</h2>
        <p>Bienvenido a nuestra sección de Bases y Promociones. Aquí encontrarás toda la información relevante sobre nuestras promociones actuales y las condiciones que aplican.</p>

        <h3>1. Promociones Actuales</h3>
        <ul>
            <li><strong>Descuento del 20% en tu primera compra:</strong> Aplica el código PRIMERA20 al finalizar tu compra.</li>
            <li><strong>Envío gratis:</strong> En compras superiores a $50.</li>
            <li><strong>Programa de Referidos:</strong> Gana un 10% de descuento por cada amigo que refieras y complete una compra.</li>
        </ul>

        <h3>2. Condiciones Generales</h3>
        <p>Las promociones están sujetas a cambios y pueden ser retiradas en cualquier momento sin previo aviso. A continuación, se detallan las condiciones generales:</p>
        <ul>
            <li>Las promociones no son acumulables con otras ofertas.</li>
            <li>El código de descuento debe ser ingresado al momento de la compra.</li>
            <li>Las promociones son válidas solo para compras realizadas a través de nuestro sitio web.</li>
        </ul>

        <h3>3. Contacto para Consultas</h3>
        <p>Si tienes alguna pregunta sobre nuestras promociones, no dudes en contactarnos a través de nuestro servicio al cliente.</p>
    </main>

    <!-- PIE DE PÁGINA -->
    <footer class="footer bg-dark text-white py-4">
        <div class="container d-flex justify-content-between">
            <div>
                <h5>Contacto</h5>
                <p><a href="https://web.facebook.com/?_rdc=1&_rdr" class="text-white">Página de Facebook</a></p>
                <p>Teléfono: +987 654 321</p>
                <p>Email: abcdefg@gmail.com</p>
            </div>
            <div>
                <h5>Atención al Cliente</h5>
                <ul class="list-unstyled">
                    <li><a href="terminos.php" class="text-white text-decoration-none">Términos y Condiciones</a></li>
                    <li><a href="orden.php" class="text-white text-decoration-none">Orden de Servicio</a></li>
                    <li><a href="libro.php" class="text-white text-decoration-none">Libro de Reclamaciones</a></li>
                    <li><a href="bonos.php" class="text-white text-decoration-none">Bonos y Promociones</a></li>
                </ul>
            </div>
            <div>
                <h5>TechWorld</h5>
                <p>© 2025 TechWorld. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</body>

</html>
