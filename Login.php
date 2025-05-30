<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - TechWorld</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />
    <link href="css/Estilos.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            border: 2px solid black; /* Marco negro */
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        label {
            margin-bottom: 5px;
            display: block;
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 12px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-login {
            background-color: red; /* Botón de ingresar */
        }

        .btn-login:hover {
            background-color: darkred;
        }

        .btn-back {
            background-color: #555; /* Botón de volver */
        }

        .btn-back:hover {
            background-color: #333;
        }

        .footer {
            margin-top: 15px;
            font-size: 14px;
            color: #555;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form>
            <label for="email">Ingresa tu correo:</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Ingresa tu contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="btn-login">Ingresar</button>
            <button type="button" class="btn-back" onclick="window.history.back()">Volver</button>
        </form>
        <div class="footer">
            <p><a href="recuperar.html">Olvidé mi contraseña</a></p>
            <p>¿No tienes una cuenta? <a href="registro.html">Regístrate aquí</a></p>
        </div>
    </div>

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