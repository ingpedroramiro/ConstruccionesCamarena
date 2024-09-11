<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructora Ejemplo</title>
    <link rel="stylesheet" href="prueba.css">
</head>

<body>
    <!-- Encabezado -->
    <header class="header">
        <div class="logo">
            <a href="#inicio"><img src="src/img/logo.jpg" width="50px" height="50px" alt="Logo de la Constructora"></a>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <!-- <li><a href="#sobre-nosotros">Sobre Nosotros</a></li> -->
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#proyectos">Proyectos</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
        <a class="cta" href="#contacto">Solicitar Cotización</a>
        <!-- Botón de Menú Desplegable (Hamburguesa) -->
        <div class="menu-toggle" id="menu-toggle">
            ☰ <!-- Ícono de hamburguesa -->
        </div>
    </header>

    <!-- Banner Principal -->
    <section class="hero inicio" id="inicio">
        <div class="hero-content">
            <h1>Construyendo el Futuro, Juntos</h1>
            <p>Innovación y Calidad en cada Proyecto</p>
            <a class="cta" href="#proyectos">Ver Nuestros Proyectos</a>
        </div>
    </section>

    <!-- Sección de Servicios -->
    <section class="servicios" id="servicios">
        <h2>Nuestros Servicios</h2>
        <div class="servicio">
            <!-- galeria de imagen -->
            <div class="galeria-grid">
                <div class="galeria-item">
                    <img src="src/img/impermeabilizacion.jpg" alt="Impermeabilizacion.">
                    <h3>Impermeabilizacion.</h3>
                </div>
                <div class="galeria-item">
                    <img src="src/img/albañileria.webp" alt="Albañileria.">
                    <h3>Albañileria Gral..</h3>
                </div>
                <div class="galeria-item">
                    <img src="src/img/pintura2.jpg" alt="Pintura.">
                    <h3>Pintura.</h3>
                </div>
                <div class="galeria-item">
                    <img src="src/img/acabados.jpg" alt="Acabados.">
                    <h3>(Pisos,Azulejos,Texturas,Yeso)</h3>
                </div>
                <!-- Añade más imágenes según sea necesario -->
            </div>
        </div>
        <!-- Repite para otros servicios -->
    </section>

    <!-- Sección de Proyectos -->
    <section class="proyectos" id="proyectos">
        <h2>Proyectos Destacados</h2>
        <!-- Galería de Proyectos -->
        <div class="proyecto">
            <img src="proyecto1.jpg" alt="Proyecto 1">
            <p>Descripción breve del proyecto.</p>
        </div>
        <!-- Repite para otros proyectos -->
    </section>

    <!-- Sección de Contacto -->
    <section class="contacto" id="contacto">
        <h2>Solicita tu Cotizacion</h2>
        <?php $link = "https://formspree.io/f/xrbzdooo"; ?>
        <?php $link_prueba = "https://formspree.io/f/xldrvoor"; ?>
        <form action="https://formspree.io/f/xldrvoor" method="POST">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="email" name="email" placeholder="Correo Electrónico">
            <textarea name="mensaje" placeholder="Mensaje"></textarea>
            <button type="submit">Enviar</button>
        </form>
    </section>

    <!-- Pie de Página -->
    <footer class="footer" style="display: flex; place-content: center; ">
        <p style="padding-right: 20px;">&copy; 2024 Construcciones Camarena. Todos los derechos reservados.</p>
                <!-- facebook pc -->
                <a style="padding-right: 20px;;" target="_blank" id="fb-pc" href="https://www.facebook.com/CamarenaConstrucciones?mibextid=ZbWKwL">
            <img style="height: 32px; padding-right: 20px;" src="src/img/facebook32x32.png" alt="Facebook"></a>
        <!-- facebook app -->
        <a style="padding-right: 20px;" href="fb://page/804460499724932" target="_blank" id="fb-app"><img style="height: 32px; padding-right: 20px;" src="src/img/facebook32x32.png" alt="Facebook"></a>
        <!-- whatsapp -->
        <a style="padding-right: 20px;" style="display: contents;" target="_blank" href="https://api.whatsapp.com/send?phone=6692178551&text=Hola,fui redireccionado desde la pagina web.">
            <img src="src/img/whatsapp32x32.png" alt="WhatsApp"></a>
        <!-- gmail -->
        <a style="padding-right: 20px;" style="display: contents;" target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=fcamarenagaray848@gmail.com&su=WEB.Mensaje&body=Hola,%20quisiera%20más%20información%20sobre%20sus%20servicios.">
            <img src="src/img/gmail32x32.png" alt="Gmail"></a>
    </footer>
    <script>
        // Obtener elementos del DOM
        const menuToggle = document.getElementById('menu-toggle');
        const navUl = document.querySelector('.nav ul');

        // Evento para mostrar/ocultar el menú al hacer clic en el botón de hamburguesa
        menuToggle.addEventListener('click', function() {
            navUl.classList.toggle('active');
        });

        // Obtener todos los enlaces del menú
        const menuItems = document.querySelectorAll('.nav ul li a');

        // Añadir un evento a cada enlace del menú
        menuItems.forEach(function(item) {
            item.addEventListener('click', function() {
                // Ocultar el menú cuando se hace clic en un elemento del menú
                navUl.classList.remove('active');
            });
        });

        // scroll smooth


    </script>
</body>

</html>