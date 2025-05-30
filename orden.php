<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden de Servicio - TechWorld</title>
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
        header {
            background-color: #000;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            border-bottom: 2px solid #444;
        }
        .logo {
            display: flex;
            align-items: center;
            background-color: white;
            border: 2px solid white;
            border-radius: 5px;
            padding: 5px;
        }
        .worktech-logo {
            width: 100px;
            height: auto;
        }
        .search-container {
            flex-grow: 1;
            margin: 0 20px;
        }
        input[type="text"] {
            width: 95%;
            padding: 8px;
            border-radius: 4px;
        }
        nav {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        nav a {
            text-decoration: none;
            color: white;
            padding: 8px 16px;
            transition: background-color 0.3s;
        }
        nav a:hover {
            background-color: #444;
        }
        .icon-container {
            display: flex;
            align-items: center;
            border: 2px solid white;
            border-radius: 5px;
            padding: 5px;
        }
        .cart-icon, .user-icon {
            width: 24px;
            height: 24px;
            vertical-align: middle;
            margin-left: 5px;
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

    <header>
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

    <div class="container">
        <h2>Orden de Servicio</h2>
        <p>En TechWorld, nos comprometemos a ofrecer un servicio de calidad. A continuación, te presentamos nuestra política de orden de servicio:</p>
        
        <h3>1. Proceso de Orden</h3>
        <p>Los clientes deben completar un formulario de pedido en línea para iniciar el proceso de orden. Una vez recibida la orden, te enviaremos una confirmación por correo electrónico.</p>
        
        <h3>2. Pagos</h3>
        <p>Aceptamos varias formas de pago, incluyendo tarjetas de crédito, débito y transferencias bancarias. El pago debe ser completado antes de procesar la orden.</p>
        
        <h3>3. Entrega</h3>
        <p>Las órdenes se procesarán dentro de 2 a 5 días hábiles. Te notificaremos cuando tu pedido esté en camino.</p>
        
        <h3>4. Cancelaciones</h3>
        <p>Las órdenes pueden ser canceladas dentro de las 24 horas posteriores a la realización del pedido. Después de este período, se aplicarán tarifas de cancelación.</p>
        
        <h3>5. Soporte</h3>
        <p>Si tienes preguntas sobre tu orden, no dudes en contactarnos a través de nuestro servicio al cliente.</p>
    </div>

<style>
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
    <footer class="footer bg-dark text-white py-4">
        <div class="container d-flex justify-content-between">
            <div>
                <h5>Contacto</h5>
                <p><a href="https://web.facebook.com/?_rdc=1&_rdr">Pagina de Facebook</a></p>
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

     <script>
        // Función para agregar productos al carrito usando localStorage
        document.querySelectorAll('.btn-agregar').forEach(button => {
            button.addEventListener('click', () => {
                const nombre = button.getAttribute('data-nombre');
                const precio = parseFloat(button.getAttribute('data-precio'));
                const imagen = button.getAttribute('data-imagen');

                let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

                // Buscar si producto ya existe en carrito
                const productoExistente = carrito.find(p => p.nombre === nombre);
                if (productoExistente) {
                    productoExistente.cantidad++;
                } else {
                    carrito.push({ nombre, precio, imagen, cantidad: 1 });
                }

                localStorage.setItem('carrito', JSON.stringify(carrito));
                alert(`${nombre} agregado al carrito`);
            });
        });
    </script>
    
    <style>
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
    </style>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>