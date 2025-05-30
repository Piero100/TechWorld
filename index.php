<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TechWorld</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />
    <link href="css/Estilos.css" rel="stylesheet" />
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

    <main>
        <div class="container my-4">
 <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">

  <!-- Producto original -->
  <div class="col">
  <div class="card shadow-sm">
    <img src="Imagenes/Productos/laptop.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Laptos</h5>
      <p class="card_text">$ 599.00</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <a href="#" class="btn btn-primary">Detalles</a>
        </div>
        <a href="#" class="btn btn-success btn-agregar" data-nombre="Laptos" data-precio="599.00">Agregar</a>
      </div>
    </div>
  </div>
</div>

<!-- Nuevos productos -->
<div class="col">
  <div class="card shadow-sm">
    <img src="https://www.pcfactory.com.pe/public/foto/2655/1_1000.jpg?t=1744605225423" class="card-img-top" alt="HP i7">
    <div class="card-body">
      <h5 class="card-title">HP 15.6" FHD i7-1355U</h5>
      <p class="card_text">S/ 2,799.90</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <a href="#" class="btn btn-primary">Detalles</a>
        </div>
        <a href="#" class="btn btn-success btn-agregar" data-nombre="HP 15.6&quot; FHD i7-1355U" data-precio="2799.90">Agregar</a>
      </div>
    </div>
  </div>
</div>

<div class="col">
  <div class="card shadow-sm">
    <img src="https://www.pcfactory.com.pe/public/foto/2789/1_1000.jpg?t=1744744595747" class="card-img-top" alt="Lenovo Slim 3">
    <div class="card-body">
      <h5 class="card-title">Lenovo IdeaPad Slim 3</h5>
      <p class="card_text">S/ 2,099.90</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <a href="#" class="btn btn-primary">Detalles</a>
        </div>
        <a href="#" class="btn btn-success btn-agregar" data-nombre="Lenovo IdeaPad Slim 3" data-precio="2099.90">Agregar</a>
      </div>
    </div>
  </div>
</div>

<div class="col">
  <div class="card shadow-sm">
    <img src="https://www.pcfactory.com.pe/public/foto/2971/1_1000.jpg?t=1744605380789" class="card-img-top" alt="Zenbook OLED">
    <div class="card-body">
      <h5 class="card-title">Asus Zenbook 14" OLED</h5>
      <p class="card_text">S/ 4,499.90</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <a href="#" class="btn btn-primary">Detalles</a>
        </div>
        <a href="#" class="btn btn-success btn-agregar" data-nombre="Asus Zenbook 14&quot; OLED" data-precio="4499.90">Agregar</a>
      </div>
    </div>
  </div>
</div>

<div class="col">
  <div class="card shadow-sm">
    <img src="https://www.pcfactory.com.pe/public/foto/3048/1_1000.jpg?t=1744744734871" class="card-img-top" alt="Lenovo Slim 3">
    <div class="card-body">
      <h5 class="card-title">Lenovo Slim 3 15IAN8</h5>
      <p class="card_text">S/ 1,399.90</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <a href="#" class="btn btn-primary">Detalles</a>
        </div>
        <a href="#" class="btn btn-success btn-agregar" data-nombre="Lenovo Slim 3 15IAN8" data-precio="1399.90">Agregar</a>
      </div>
    </div>
  </div>
</div>

<div class="col">
  <div class="card shadow-sm">
    <img src="https://rymportatiles.com.pe/cdn/shop/files/HP250G97256.png?v=1698339264" class="card-img-top" alt="HP i5">
    <div class="card-body">
      <h5 class="card-title">HP 15.6" HD i5-1235U</h5>
      <p class="card_text">S/ 1,799.90</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <a href="#" class="btn btn-primary">Detalles</a>
        </div>
        <a href="#" class="btn btn-success btn-agregar" data-nombre="HP 15.6&quot; HD i5-1235U" data-precio="1799.90">Agregar</a>
      </div>
    </div>
  </div>
</div>

<div class="col">
  <div class="card shadow-sm">
    <img src="https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaPE/124862929_01/w=1500,h=1500,fit=pad" class="card-img-top" alt="HP Ryzen 5">
    <div class="card-body">
      <h5 class="card-title">HP Ryzen 5-7520U</h5>
      <p class="card_text">S/ 1,999.90</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <a href="#" class="btn btn-primary">Detalles</a>
        </div>
        <a href="#" class="btn btn-success btn-agregar" data-nombre="HP Ryzen 5-7520U" data-precio="1999.90">Agregar</a>
      </div>
    </div>
  </div>
</div>

<div class="col">
  <div class="card shadow-sm">
    <img src="https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaPE/123497720_01/w=800,h=800,fit=pad" class="card-img-top" alt="Vivobook i9">
    <div class="card-body">
      <h5 class="card-title">Asus Vivobook i9-13900H</h5>
      <p class="card_text">S/ 3,499.90</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <a href="#" class="btn btn-primary">Detalles</a>
        </div>
        <a href="#" class="btn btn-success btn-agregar" data-nombre="Asus Vivobook i9-13900H" data-precio="3499.90">Agregar</a>
      </div>
    </div>
  </div>
</div>

<div class="col">
  <div class="card shadow-sm">
    <img src="https://imagenes.deltron.com.pe/images/productos/on-line/items/large/nb/as/nbasx1605za932.jpg" class="card-img-top" alt="Vivobook i7">
    <div class="card-body">
      <h5 class="card-title">Asus Vivobook i7-12700H</h5>
      <p class="card_text">S/ 2,699.90</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <a href="#" class="btn btn-primary">Detalles</a>
        </div>
        <a href="#" class="btn btn-success btn-agregar" data-nombre="Asus Vivobook i7-12700H" data-precio="2699.90">Agregar</a>
      </div>
    </div>
  </div>
</div>

<div class="col">
  <div class="card shadow-sm">
    <img src="https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaPE/128716219_01/w=1500,h=1500,fit=pad" class="card-img-top" alt="Vivobook i5">
    <div class="card-body">
      <h5 class="card-title">Asus Vivobook i5-12500H</h5>
      <p class="card_text">S/ 2,099.90</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <a href="#" class="btn btn-primary">Detalles</a>
        </div>
        <a href="#" class="btn btn-success btn-agregar" data-nombre="Asus Vivobook i5-12500H" data-precio="2099.90">Agregar</a>
      </div>
    </div>
  </div>
</div>

<div class="col">
  <div class="card shadow-sm">
    <img src="https://www.pcfactory.com.pe/public/foto/3671/1_1000.jpg?t=1743611323625" class="card-img-top" alt="TUF F15">
    <div class="card-body">
      <h5 class="card-title">Asus TUF F15 i7-12700H</h5>
      <p class="card_text">S/ 4,199.90</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <a href="#" class="btn btn-primary">Detalles</a>
        </div>
        <a href="#" class="btn btn-success btn-agregar" data-nombre="Asus TUF F15 i7-12700H" data-precio="4199.90">Agregar</a>
      </div>
    </div>
  </div>
</div>

<div class="col">
  <div class="card shadow-sm">
    <img src="https://www.pcfactory.com.pe/public/foto/2817/1_1000.jpg?t=1744744624298" class="card-img-top" alt="Lenovo Gamer">
    <div class="card-body">
      <h5 class="card-title">Lenovo LOQ Gamer 15APH8</h5>
      <p class="card_text">S/ 4,699.90</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <a href="#" class="btn btn-primary">Detalles</a>
        </div>
        <a href="#" class="btn btn-success btn-agregar" data-nombre="Lenovo LOQ Gamer 15APH8" data-precio="4699.90">Agregar</a>
      </div>
    </div>
  </div>
</div>

<div class="col">
  <div class="card shadow-sm">
    <img src="https://www.pcfactory.com.pe/public/foto/3453/1_1000.jpg?t=1743388193505" class="card-img-top" alt="Legion Pro">
    <div class="card-body">
      <h5 class="card-title">Lenovo Legion Pro 7</h5>
      <p class="card_text">S/ 11,899.90</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <a href="#" class="btn btn-primary">Detalles</a>
        </div>
        <a href="#" class="btn btn-success btn-agregar" data-nombre="Lenovo Legion Pro 7" data-precio="11899.90">Agregar</a>
      </div>
    </div>
  </div>
</div>

</div>


            </div>
        </div>
    </main>
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
                <p><a href="https://web.facebook.com/profile.php?id=61576672839682">Pagina de Facebook</a></p>
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
  document.addEventListener('DOMContentLoaded', function () {
    const botones = document.querySelectorAll('.btn-agregar');
    const lista = document.getElementById('lista-carrito');

    botones.forEach(boton => {
      boton.addEventListener('click', function (e) {
        e.preventDefault();

        const nombre = this.getAttribute('data-nombre');
        const precio = this.getAttribute('data-precio');

        const li = document.createElement('li');
        li.classList.add('list-group-item');
        li.textContent = `${nombre} - S/ ${precio}`;

        lista.appendChild(li);
      });
    });
  });
</script>

   

    <script>

        document.querySelectorAll('.btn-agregar').forEach(button => {
            button.addEventListener('click', () => {
                const nombre = button.getAttribute('data-nombre');
                const precio = parseFloat(button.getAttribute('data-precio'));
                const imagen = button.getAttribute('data-imagen');

                let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

   
                const productoExistente = carrito.find(p => p.nombre === nombre);
                if (productoExistente) {
                    productoExistente.cantidad++;
                } else {
                    carrito.push({ nombre, precio, imagen, cantidad: 1 });
                }

                localStorage.setItem('carrito', JSON.stringify(carrito));
                alert(`${nombre} `);
            });
        });
    </script>
</body>

      
