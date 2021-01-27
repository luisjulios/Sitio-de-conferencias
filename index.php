<?php include_once 'includes/templates/header.php';?>
    <section class="seccion contenedor">
      <h2>La mejor conferencia de Diseño Web en español</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique incidunt ipsa debitis obcaecati veniam, recusandae fugit repellat voluptatibus iste praesentium? Quaerat laboriosam cumque qui veritatis nisi, voluptatem quo mollitia nihil.</p>
    </section><!--seccion-->

    <section class="programa">
      <div class="contenedor-video">
        <video autoplay loop poster="img/bg-talleres.jpg">
          <source src="video/video.mp4" type="video/mp4">
          <source src="video/video.webm" type="video/mp4">
          <source src="video/video.ogv" type="video/mp4">
        </video>
      </div><!--contenedor-video-->
      <div class="contenido-programa">
        <div class="contenedor">
          <div class="programa-evento">
            <h2>Programa del evento</h2>
            <nav class="menu-programa">
              <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
              <a href="#conferencias"><i class="fas fa-comment"></i>Conferencias</a>
              <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
            </nav>
            <div id="talleres" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>HTML5, CSS3, y JavaScritps</h3>
                <p><i class="fas fa-clock"></i>16:00 hrs</p>
                <p><i class="fas fa-calendar-day"></i>10 de Dic</p>
                <p><i class="fas fa-user"></i>Juan Pablo de la torre Valdez</p>
              </div>
              <div class="detalle-evento">
                <h3>Responsive Web Design</h3>
                <p><i class="fas fa-clock"></i>20:00 hrs</p>
                <p><i class="fas fa-calendar-day"></i>10 de Dic</p>
                <p><i class="fas fa-user"></i>Juan Pablo de la torre Valdez</p>
              </div>
              <a href="#" class="button float-right">Ver todos</a>
            </div><!--Talleres-->
            <div id="conferencias" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Cómo ser freelancer</h3>
                <p><i class="fas fa-clock"></i>16:00 hrs</p>
                <p><i class="fas fa-calendar-day"></i>10 de Dic</p>
                <p><i class="fas fa-user"></i>Gregorio Sanchéz</p>
              </div>
              <div class="detalle-evento">
                <h3>Tecnologías del futuro</h3>
                <p><i class="fas fa-clock"></i>20:00 hrs</p>
                <p><i class="fas fa-calendar-day"></i>10 de Dic</p>
                <p><i class="fas fa-user"></i>Susan Sanchéz</p>
              </div>
              <a href="#" class="button float-right">Ver todos</a>
            </div><!--Conferencias-->
            <div id="seminarios" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Diseño UI/UX para móviles</h3>
                <p><i class="fas fa-clock"></i>16:00 hrs</p>
                <p><i class="fas fa-calendar-day"></i>10 de Dic</p>
                <p><i class="fas fa-user"></i>Harold García</p>
              </div>
              <div class="detalle-evento">
                <h3>Aprende a programar en una mañana</h3>
                <p><i class="fas fa-clock"></i>20:00 hrs</p>
                <p><i class="fas fa-calendar-day"></i>10 de Dic</p>
                <p><i class="fas fa-user"></i>Susana Rivera</p>
              </div>
              <a href="#" class="button float-right">Ver todos</a>
            </div><!--Seminarios-->
          </div><!--programa-evento-->
        </div><!--contenedor-->
      </div><!--contenido-programa-->
    </section><!--programa-->

    <section class="invitados contenedor seccion">
      <h2>Nuestros Invitados</h2>
      <ul class="lista-invitados clearfix">
        <li>
          <div class="invitado">
            <img src="img/invitado1.jpg" alt="imagen invitado">
            <p>Rafael Bautista</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado2.jpg" alt="imagen invitado">
            <p>Shari Herrera</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado3.jpg" alt="imagen invitado">
            <p>Gregorio Sánchez</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado4.jpg" alt="imagen invitado">
            <p>Susana Rivera</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado5.jpg" alt="imagen invitado">
            <p>Harol García</p>
          </div>
        </li>
        <li>
          <div class="invitado">
            <img src="img/invitado6.jpg" alt="imagen invitado">
            <p>Susan Sánchez</p>
          </div>
        </li>
      </ul>
    </section><!--invitados-->

    <div class="contador parallax">
      <div class="contenedor">
        <ul class="resumen-evento clearfix">
          <li><p class="numero"></p>Invitados</li>
          <li><p class="numero"></p>Talleres</li>
          <li><p class="numero"></p>Días</li>
          <li><p class="numero"></p>Conferencias</li>
        </ul>
      </div>
    </div><!--contador-->

    <section class="precios seccion">
      <h2>Precios</h2>
      <div class="contenedor">
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
              <a href="#" class="button hollow">Comprar</a>
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
              <a href="#" class="button">Comprar</a>
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
              <a href="#" class="button hollow">Comprar</a>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <div id="mapa" class="mapa"></div>

    <section class="seccion">
      <h2>Testimoniales</h2>
      <div class="testimoniales contenedor clearfix">
        <div class="testimonial">
          <blockquote>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit dicta recusandae rem veniam blanditiis porro minus provident similique quo, reprehenderit obcaecati delectus maxime non nobis debitis temporibus harum, illo dolor?</p>
            <footer class="info-testimonial clearfix">
              <img src="img/testimonial.jpg" alt="imagen testimonial">
              <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
            </footer>
          </blockquote>
        </div><!--Fin del testimonial-->
        <div class="testimonial">
          <blockquote>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit dicta recusandae rem veniam blanditiis porro minus provident similique quo, reprehenderit obcaecati delectus maxime non nobis debitis temporibus harum, illo dolor?</p>
            <footer class="info-testimonial clearfix">
              <img src="img/testimonial.jpg" alt="imagen testimonial">
              <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
            </footer>
          </blockquote>
        </div><!--Fin del testimonial-->
        <div class="testimonial">
          <blockquote>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit dicta recusandae rem veniam blanditiis porro minus provident similique quo, reprehenderit obcaecati delectus maxime non nobis debitis temporibus harum, illo dolor?</p>
            <footer class="info-testimonial clearfix">
              <img src="img/testimonial.jpg" alt="imagen testimonial">
              <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
            </footer>
          </blockquote>
        </div><!--Fin del testimonial-->
      </div>
    </section><!--FindeTestimoniales-->

    <div class="newsletter parallax">
      <div class="contenido contenedor">
        <p>Regístrate al newsletter:</p>
        <h3>GdlWebCamp</h3>
        <a href="registro.php" class="button transparente">Registro</a>
      </div>
    </div><!--Fin del Newsletter-->

    <section class="seccion">
      <h2>Faltan:</h2>
      <div class="cuenta-regresiva contenedor">
        <ul class="clearfix">
          <li><p id="dias" class="numero">0</p>días</li>
          <li><p id="horas" class="numero">0</p>horas</li>
          <li><p id="minutos" class="numero">0</p>minutos</li>
          <li><p id="segundos" class="numero">0</p>segundos</li>
        </ul>
      </div>
    </section>

    <?php include_once 'includes/templates/footer.php';?>