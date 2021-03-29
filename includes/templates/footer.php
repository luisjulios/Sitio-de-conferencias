<footer class="site-footer">
      <div class="contenedor clearfix">
        <div class="footer-informacion">
          <h3>Sobre <span>GdlWebCamp</span></h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores, vitae. Ratione ad voluptas excepturi ex maiores possimus veritatis nam deserunt porro commodi molestias minima a temporibus repellendus, aut deleniti dignissimos! </p>
        </div>
        <div class="menu">
          <h3>Redes <span>Sociales</span></h3>
          <nav class="redes-sociales">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </nav>
        </div>
      </div>
      <p class="copyright">Todos los derechos Reservados GdlWebCamp 2020.</p>
            <!-- Begin Mailchimp Signup Form -->
<link href="" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:center; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div style="display: none;">
  <div id="mc_embed_signup">
    <form action="https://gmail.us7.list-manage.com/subscribe/post?u=5795f5ee6245b94c1b700b058&amp;id=daa93a494c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
           <h2 for="mce-EMAIL">Suscríbete y no te pierdas nuestras novedades!</h2>
      <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Tu correo electrónico" required>
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true">
        <input type="text" name="b_5795f5ee6245b94c1b700b058_daa93a494c" tabindex="-1" value="">
      </div>
        <div class="clear">
          <input type="submit" value="Suscribir" name="subscribe" id="mc-embedded-subscribe" class="button">
        </div>
        </div>
    </form>
  </div>
</div>

<!--End mc_embed_signup-->
    </footer>


  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.lettering.js"></script>
  <?php
  $archivo = basename($_SERVER['PHP_SELF']);
  $pagina = str_replace(".php", "", $archivo);
  if ($pagina == "invitados" || $pagina == "index") {
    echo '<script src="js/jquery.colorbox-min.js"></script>';
  } else if ($pagina === 'conferencia') {
    echo '<script src="js/lightbox.js"></script>';
  }
  ?>
  <script src="js/main.js"></script>
  <script src="js/cotizador.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
  
</body>

</html>