<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Carrito - TechWorld</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />
    
    <!-- PayPal SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=AXRPA5piliN0w67FSDtTeBQlSyjE8nj4ATsBHoBbd-r2EVPpEPYYHWy1LxNnGibmsXw4aaygltRTcqWK&currency=USD"></script>
</head>

<body>
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

    <main class="container my-4">
        <h1>Carrito de Compras</h1>
        <table class="table table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Producto</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="carrito-body">
                <!-- Aquí se llenará con JS -->
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="4" class="text-end">Total:</th>
                    <th id="total">S/ 0.00</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>

        <div class="d-flex justify-content-between align-items-center">
            <a href="index.php" class="btn btn-primary">Seguir Comprando</a>
            <button id="btn-pagar" class="btn btn-success">Finalizar compra</button>
            <!-- Contenedor para el botón de PayPal -->
            <div id="paypal-button-container" style="display:none;"></div>
        </div>
    </main>

    <footer class="footer bg-dark text-white py-4 mt-5">
        <div class="container d-flex justify-content-between">
            <div>
                <h5>Contacto</h5>
                <p>Teléfono: +987 654 321</p>
                <p>Email: abcdefg@gmail.com</p>
            </div>
            <div>
                <h5>Atención al Cliente</h5>
                <ul class="list-unstyled">
                    <li><a href="terminos.php" class="text-white text-decoration-none">Términos y Condiciones</a></li>
                    <li><a href="orden.php" class="text-white text-decoration-none">Orden de Servicio</a></li>
                    <li><a href="reclamaciones.php" class="text-white text-decoration-none">Libro de Reclamaciones</a></li>
                    <li><a href="bases.php" class="text-white text-decoration-none">Bonos y Promociones</a></li>
                </ul>
            </div>
            <div>
                <h5>TechWorld</h5>
                <p>© 2025 TechWorld. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

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

    <script>
        // Cargar carrito desde localStorage y mostrarlo
        function cargarCarrito() {
            const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            const tbody = document.getElementById('carrito-body');
            tbody.innerHTML = '';

            let total = 0;

            carrito.forEach((producto, index) => {
                const subtotal = producto.precio * producto.cantidad;
                total += subtotal;

                const tr = document.createElement('tr');

                tr.innerHTML = `
                    <td>${producto.nombre}</td>
                    <td><img src="${producto.imagen}" alt="${producto.nombre}" style="max-width: 80px;"></td>
                    <td>S/ ${producto.precio.toFixed(2)}</td>
                    <td>
                        <input type="number" min="1" value="${producto.cantidad}" data-index="${index}" class="form-control cantidad-input" style="width: 80px;">
                    </td>
                    <td>S/ ${subtotal.toFixed(2)}</td>
                    <td>
                        <button class="btn btn-danger btn-eliminar" data-index="${index}">Eliminar</button>
                    </td>
                `;

                tbody.appendChild(tr);
            });

            document.getElementById('total').textContent = `S/ ${total.toFixed(2)}`;

            // Agregar eventos a botones eliminar y inputs de cantidad
            document.querySelectorAll('.btn-eliminar').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    const index = e.target.getAttribute('data-index');
                    eliminarProducto(index);
                });
            });

            document.querySelectorAll('.cantidad-input').forEach(input => {
                input.addEventListener('change', (e) => {
                    const index = e.target.getAttribute('data-index');
                    let cantidad = parseInt(e.target.value);
                    if (cantidad < 1) cantidad = 1;
                    actualizarCantidad(index, cantidad);
                });
            });
        }

        function eliminarProducto(index) {
            let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            carrito.splice(index, 1);
            localStorage.setItem('carrito', JSON.stringify(carrito));
            cargarCarrito();
        }

        function actualizarCantidad(index, cantidad) {
            let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            carrito[index].cantidad = cantidad;
            localStorage.setItem('carrito', JSON.stringify(carrito));
            cargarCarrito();
        }

        // Cuando clic en botón "Finalizar compra", ocultar ese botón y mostrar el botón PayPal
        document.getElementById('btn-pagar').addEventListener('click', () => {
            const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            if (carrito.length === 0) {
                alert('El carrito está vacío.');
                return;
            }

            // Ocultar botón manual
            document.getElementById('btn-pagar').style.display = 'none';
            // Mostrar contenedor PayPal
            document.getElementById('paypal-button-container').style.display = 'block';
        });

        // Renderizar botón PayPal con el total calculado
        paypal.Buttons({
            style: {
                layout: 'vertical',
                color: 'blue',
                shape: 'rect',
                label: 'pay',
                height: 40,
                tagline: false
            },
            createOrder: function(data, actions) {
                const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
                let total = 0;
                carrito.forEach(item => total += item.precio * item.cantidad);
                // Pasar total a la orden
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: total.toFixed(2)
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(detalles) {
                    alert('Pago completado con éxito. Gracias por su compra.');
                    localStorage.removeItem('carrito');
                    window.location.href = "completado.html"; // Cambia esta URL si quieres otra página
                });
            },
            onCancel: function(data) {
                alert('Pago cancelado.');
                console.log(data);
                // Volver a mostrar botón "Finalizar compra" si se cancela
                document.getElementById('btn-pagar').style.display = 'inline-block';
                document.getElementById('paypal-button-container').style.display = 'none';
            },
            onError: function(err) {
                alert('Hubo un error con el pago.');
                console.error(err);
                document.getElementById('btn-pagar').style.display = 'inline-block';
                document.getElementById('paypal-button-container').style.display = 'none';
            }
        }).render('#paypal-button-container');

        cargarCarrito();
    </script>
</body>

</html>
