<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de Sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/headerStyles.css">
    <link rel="stylesheet" href="../css/footerStyles.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <header>
        <div class="logo">Universidad Autónoma del Estado de Hidalgo</div>
        <nav>
            <ul>
                <li><a href="index.php" class="nav-link">Inicio</a></li>
                <li><a href="eventosDisponibles.php" class="nav-link">Buscar eventos</a></li>
                <li><a href="about.php" class="nav-link">Sobre Nosotros</a></li>
                <li><a href="contacto.php" class="nav-link">Contacto</a></li>
            </ul>
            <script src ="../js/linkActivo.js"></script>
        </nav>
        <div class="auth-buttons">
            <a href="login.php" class="nav-li">Iniciar Sesión</a>
        </div>
    </header>

    <!-- Formulario de Inicio de Sesión -->
    <div class="login-wrapper">
        <div class="login-container">
            <h2>Iniciar Sesión</h2>

            <?php
            session_start();
            if (isset($_SESSION['error'])) {
                echo "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>";
                unset($_SESSION['error']); // Elimina el mensaje después de mostrarlo
            }
            ?>

            <form class="login-form" action="controlador/loginControlador.php" method="POST">
                <?php
                    include "controlador/updateEvento.php";
                ?>
                <label for="numero_cuenta">Número de Cuenta:</label>
                <input type="text" name="numero_cuenta" required>
                
                <label for="nip">NIP:</label>
                <input type="password" name="nip" required>
                
                <button type="submit" name="btnLogin">Iniciar Sesión</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Gestor de Eventos. Todos los derechos reservados.</p>
        <p><a href="FAQ.php">FAQ</a></p>
        <p>
            <a href="#">Instituto de Ciencias Básicas e Ingeniería</a> |
            <a href="tel:+527713038278">Teléfono</a> |
            <a href="mailto:ca465354@uaeh.edu.mx">Correo Electrónico</a>
        </p>    
    </footer>
</body>
</html>