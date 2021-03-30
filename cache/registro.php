<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="theme-color" content="#fafafa">
</head>
<body class="  registro">
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
    <header class="site-header">
      <div class="hero">
        <div class="contenido-header">
          <nav class="redes-sociales">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </nav>
          <div class="informacion-evento">
            <div class="clearfix">
              <p class="fecha"><i class="fas fa-calendar-week"></i> 10-12 Dic</p>
              <p class="ciudad"><i class="fas fa-map-marker-alt"></i> Santiago de Chile</p>
            </div>
            <h1 class="nombre-sitio">GdlWbCamp</h1>
            <p class="slogan">La mejor conferencia de <span>Diseño Web</span></p>
          </div><!--Informacion evento-->         
        </div>
      </div><!--.hero-->
    </header>
    <div class="barra">
      <div class="contenedor clearfix">
        <div class="logo">
          <a href="index.php">
          <img src="img/logo.svg" alt="logo gdlwebcamp">
          </a>
        </div>
        <div class="menu-movil">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <nav class="navegacion-principal clearfix">
          <a href="conferencia.php">Conferencia</a>
          <a href="calendario.php">Calendario</a>
          <a href="invitados.php">Invitados</a>
          <a href="registro.php">Reservaciones</a>
        </nav>
      </div><!--contenedor-->
    </div><!--Barra-->    <section class="seccion contenedor">
        <h2>Registro de Usuarios</h2>
        <form id="registro" class="registro" action="pagar.php" method="POST">
            <div id="datos-usuario" class="registro caja clearfix">
                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Tu nombre" required>
                </div>
                <div class="campo">
                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido" id="apellido" placeholder="Tu apellido" required>
                </div>
                <div class="campo">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Tu email" required>
                </div>
                <div id="error"></div>
            </div><!--#datos-usuario-->

            <div id="paquetes" class="paquetes">
                  <h3>Elige el número de boletos</h3>
                  <ul class="lista-precios clearfix">
                    <li>
                      <div class="tabla-precios">
                        <h3>Pase por día (viernes)</h3>
                        <p class="numero">$30</p>
                        <ul>
                          <li></i>Bocadillos Gratis</li>
                          <li></i>Todas las conferencias</li>
                          <li></i>Todos los talleres</li>
                        </ul>
                        <div class="orden">
                          <label for="pase_dia">Boletos deseados:</label>
                          <input type="number" min="0" id="pase_dia" size="3" name="boletos[un_dia][cantidad]" placeholder="0">
                          <input type="hidden" value="30" name="boletos[un_dia][precio]">
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="tabla-precios">
                        <h3>Todos los dias</h3>
                        <p class="numero">$50</p>
                        <ul>
                          <li></i>Bocadillos Gratis</li>
                          <li></i>Todas las conferencias</li>
                          <li></i>Todos los talleres</li>
                        </ul>
                        <div class="orden">
                          <label for="pase_completo">Boletos deseados:</label>
                          <input type="number" min="0" id="pase_completo" size="3" name="boletos[completo][cantidad]" placeholder="0">
                          <input type="hidden" value="50" name="boletos[completo][precio]">
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="tabla-precios">
                        <h3>Pase por 2 días(viernes y sábado)</h3>
                        <p class="numero">$45</p>
                        <ul>
                          <li></i>Bocadillos Gratis</li>
                          <li></i>Todas las conferencias</li>
                          <li></i>Todos los talleres</li>
                        </ul>
                        <div class="orden">
                          <label for="pase_dosdias">Boletos deseados:</label>
                          <input type="number" min="0" id="pase_dosdias" size="3" name="boletos[dos_dias][cantidad]" placeholder="0">
                          <input type="hidden" value="45" name="boletos[dos_dias][precio]">
                        </div>
                      </div>
                    </li>
                  </ul>
            </div><!--#paquetes-->
            <div id="eventos" class="eventos clearfix">
                <h3>Elige tus talleres</h3>
                <div class="caja">
                                
                  <div id="viernes" class="contenido-dia clearfix">
                    <h4>viernes</h4>
                                          <div>
                        <p>Seminarios</p>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="9" value="9">
                          <time>10:00:00</time> <br> Diseño UI y UX para móviles                          <span class="autor">Susan Sánchez</span>
                          </label>
                        
                      </div>
                                            <div>
                        <p>Conferencias</p>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="6" value="6">
                          <time>10:00:00</time> <br> Como ser freelancer                          <span class="autor">Susan Sánchez</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="7" value="7">
                          <time>17:00:00</time> <br> Tecnologías del Futuro                          <span class="autor">Rafael Bautista</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="8" value="8">
                          <time>19:00:00</time> <br> Seguridad en la Web                          <span class="autor">Shari Herrera</span>
                          </label>
                        
                      </div>
                                            <div>
                        <p>Talleres</p>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="1" value="1">
                          <time>10:00:00</time> <br> Responsive Web Design                          <span class="autor">Rafael Bautista</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="2" value="2">
                          <time>12:00:00</time> <br> Flexbox                          <span class="autor">Shari Herrera</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="3" value="3">
                          <time>14:00:00</time> <br> HTML5 y CSS3                          <span class="autor">Gregorio Sánchez</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="4" value="4">
                          <time>17:00:00</time> <br> Drupal                          <span class="autor">Susana Rivera</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="5" value="5">
                          <time>19:00:00</time> <br> WordPress                          <span class="autor">Harol García</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="63" value="63">
                          <time>17:52:00</time> <br> Bootstrap 5                          <span class="autor">Luis Julio</span>
                          </label>
                        
                      </div>
                      
                  </div> <!--#contenido-dia-->
                  
                  <div id="sabado" class="contenido-dia clearfix">
                    <h4>sábado</h4>
                                          <div>
                        <p>Seminarios</p>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="19" value="19">
                          <time>10:00:00</time> <br> Aprende a Programar en una mañana                          <span class="autor">Gregorio Sánchez</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="20" value="20">
                          <time>17:00:00</time> <br> Diseño UI y UX para móviles                          <span class="autor">Harol García</span>
                          </label>
                        
                      </div>
                                            <div>
                        <p>Conferencias</p>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="16" value="16">
                          <time>10:00:00</time> <br> Como crear una tienda online que venda millones en pocos días                          <span class="autor">Susan Sánchez</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="17" value="17">
                          <time>17:00:00</time> <br> Los mejores lugares para encontrar trabajo                          <span class="autor">Rafael Bautista</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="18" value="18">
                          <time>19:00:00</time> <br> Pasos para crear un negocio rentable                           <span class="autor">Shari Herrera</span>
                          </label>
                        
                      </div>
                                            <div>
                        <p>Talleres</p>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="10" value="10">
                          <time>10:00:00</time> <br> AngularJS                          <span class="autor">Rafael Bautista</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="11" value="11">
                          <time>12:00:00</time> <br> PHP y MySQL                          <span class="autor">Shari Herrera</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="12" value="12">
                          <time>14:00:00</time> <br> JavaScript Avanzado                          <span class="autor">Gregorio Sánchez</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="13" value="13">
                          <time>17:00:00</time> <br> SEO en Google                          <span class="autor">Susana Rivera</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="14" value="14">
                          <time>19:00:00</time> <br> De Photoshop a HTML5 y CSS3                          <span class="autor">Harol García</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="15" value="15">
                          <time>21:00:00</time> <br> PHP Intermedio y Avanzado                          <span class="autor">Susan Sánchez</span>
                          </label>
                        
                      </div>
                      
                  </div> <!--#contenido-dia-->
                  
                  <div id="domingo" class="contenido-dia clearfix">
                    <h4>domingo</h4>
                                          <div>
                        <p>Conferencias</p>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="42" value="42">
                          <time>10:00:00</time> <br> Como hacer Marketing en línea                          <span class="autor">Susan Sánchez</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="43" value="43">
                          <time>17:00:00</time> <br> ¿Con que lenguaje debo empezar?                          <span class="autor">Shari Herrera</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="44" value="44">
                          <time>19:00:00</time> <br> Frameworks y librerias Open Source                          <span class="autor">Gregorio Sánchez</span>
                          </label>
                        
                      </div>
                                            <div>
                        <p>Talleres</p>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="21" value="21">
                          <time>10:00:00</time> <br> Laravel                          <span class="autor">Rafael Bautista</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="22" value="22">
                          <time>12:00:00</time> <br> Crea tu propia API                          <span class="autor">Shari Herrera</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="23" value="23">
                          <time>14:00:00</time> <br> JavaScript y jQuery                          <span class="autor">Gregorio Sánchez</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="24" value="24">
                          <time>17:00:00</time> <br> Creando Plantillas para WordPress                          <span class="autor">Susana Rivera</span>
                          </label>
                                                  <label>
                          <input type="checkbox" name="registro[]" id="25" value="25">
                          <time>19:00:00</time> <br> Tiendas Virtuales en Magento                          <span class="autor">Harol García</span>
                          </label>
                        
                      </div>
                      
                  </div> <!--#contenido-dia-->
                                    </div><!--.caja-->
            </div> <!--#eventos-->
            <div id="resumen" class="resumen clearfix">
              <h3>Pago y Extras</h3>
                <div class="caja clearfix">
                  <div class="extras">
                    <div class="orden">
                      <label for="camisa_evento">Camisa del evento $10 <small>(promoción 7% dcto.)</small></label>
                      <input type="number" min="0" id="camisa_evento" name="pedido_extra[camisas][cantidad]" size="3" placeholder="0">
                      <input type="hidden" value="10" name="pedido_extra[camisas][precio]">
                    </div><!--#orden-->
                    <div class="orden">
                      <label for="etiquetas">Paquete de 10 etiquetas $2<small>(HTML5, CSS3, JavaScript, Chrome)</small></label>
                      <input type="number" min="0" id="etiquetas" name="pedido_extra[etiquetas][cantidad]" size="3" placeholder="0">
                      <input type="hidden" value="2" name="pedido_extra[etiquetas][precio]">

                    </div><!--#orden-->
                    <div class="orden">
                      <label for="regalo">Seleccione un regalo:</label><br>
                      <select id="regalo" name="regalo" required>
                        <option value="">-Seleccione un regalo-</option>
                        <option value="1">Pulsera</option>
                        <option value="2">Etiquetas</option>
                        <option value="3">Plumas</option>
                      </select>
                    </div><!--#orden-->
                    <input type="button" id="calcular" class="button" value="Calcular">
                  </div><!--#extras-->
                  <div class="total">
                    <p>Resumen:</p>
                    <div id="lista-productos"></div>
                    <p>Total:</p>
                    <div id="suma-total">

                    </div>
                    <input type="hidden" name="total_pedido" id="total_pedido">
                    <input id="btnRegistro" type="submit" name="submit" class="button" value="Pagar">
                  </div><!--#total-->
                </div><!--#caja-->
            </div><!--#resumen-->
            
        </form>
    </section>
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


  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha512-3n19xznO0ubPpSwYCRRBgHh63DrV+bdZfHK52b1esvId4GsfwStQNPJFjeQos2h3JwCmZl0/LgLxSKMAI55hgw==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous"></script>
  <script src="js/plugins.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-animateNumber/0.0.14/jquery.animateNumber.min.js" integrity="sha512-WY7Piz2TwYjkLlgxw9DONwf5ixUOBnL3Go+FSdqRxhKlOqx9F+ee/JsablX84YBPLQzUPJsZvV88s8YOJ4S/UA==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js" integrity="sha512-lteuRD+aUENrZPTXWFRPTBcDDxIGWe5uu0apPEn+3ZKYDwDaEErIK9rvR0QzUGmUQ55KFE2RqGTVoZsKctGMVw==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js" integrity="sha512-9ex1Kp3S7uKHVZmQ44o5qPV6PnP8/kYp8IpUHLDJ+GZ/qpKAqGgEEH7rhYlM4pTOSs/WyHtPubN2UePKTnTSww==" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
  <script src="js/cotizador.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
  