<link rel="stylesheet" href="styles_contacto.css">
<script src="app.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<main>
  <section class="contenido">
    <!-- contenido -->

    <div class="divcontacto">

      <!-- info de contacto -->
      <section id="informacion-contacto">
        <h2>Información de Contacto</h2>
        <p><strong>Correo Electrónico:</strong> fcamarenagaray848@gmail.com</p>
        <p style="font-weight: bold;"><strong>Teléfono:</strong> +52 6691586453</p>
        <p><strong>Dirección:</strong> Calle Ejemplo 123, Ciudad, País</p>
        <h2>Redes Sociales</h2>
        <!-- facebook app -->
        <a href="fb://page/804460499724932" target="_blank" id="fb-app"><img src="src/img/facebook64x64.png" alt="Facebook"></a>
        <!-- facebook pc -->
        <a target="_blank" id="fb-pc" href="https://www.facebook.com/CamarenaConstrucciones?mibextid=ZbWKwL">
          <img src="src/img/facebook64x64.png" alt="Facebook"></a>
        <!-- whatsapp -->
        <a style="display: contents;" target="_blank" href="https://api.whatsapp.com/send?phone=6692178551&text=Hola,fui redireccionado desde la pagina web.">
          <img src="src/img/whatsapp64x64.png" alt="WhatsApp"></a>
        <!-- gmail -->
        <a style="display: contents;" target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=fcamarenagaray848@gmail.com&su=WEB.Mensaje&body=Hola,%20quisiera%20más%20información%20sobre%20sus%20servicios.">
          <img src="src/img/gmail64x64.png" alt="Gmail"></a>
      </section>
      <!-- formulario de contacto -->
      <section id="formulario-contacto">
        <h2>Envíanos un mensaje</h2>
        
        <form action="https://formspree.io/f/xrbzdooo" method="POST">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre" required>

          <label for="email">Correo Electrónico:</label>
          <input type="email" id="email" name="email" required>

          <label for="asunto">Asunto:</label>
          <input type="text" id="asunto" name="asunto" required>

          <label for="mensaje">Mensaje:</label>
          <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

          <button type="submit">Enviar</button>
        </form>
      </section>
    </div>

    <!-- mapa -->
    <section id="ubicacion" style="border: solid;">
      <h2>Encuéntranos</h2>
      <!-- Incrusta un mapa de Google Maps -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d916.3232727895426!2d-106.39383393046671!3d23.26879769868763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8698ad2aaae576b3%3A0x8c05ad66d74c310d!2sValle%20de%20M%C3%A9xico%2014934%2C%2082134%20Mazatl%C3%A1n%2C%20Sin.!5e0!3m2!1ses-419!2smx!4v1725650103703!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

  </section>
  <aside class="sidebar">
    <?php include 'sidebar.php'; ?>
  </aside>
</main>