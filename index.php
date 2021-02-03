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
            <?php
              try {
                require_once('includes/funciones/bd_conexion.php');
                $sql = " SELECT * FROM `categoria_evento` ";
                $sql .= "ORDER BY `orden`";
                $resultado = $conn->query($sql);
              } catch (\Exception $e) {
                $error = $e->getMessage();
              }
            ?>
            <nav class="menu-programa">
              <?php	while($cat = $resultado->fetch_array(MYSQLI_ASSOC))	{ ?>
              <?php	$categoria = $cat['cat_evento'];?>
                <a href="#<?php echo strtolower($categoria);?>">
                <i class="fa . <?php echo $cat['icono'];?>"></i><?php echo $categoria;?></a>
              <?php } ?>
            </nav>
              <?php
                try {
                  require_once('includes/funciones/bd_conexion.php');
                  $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                  $sql .= " FROM eventos ";
                  $sql .= " INNER JOIN categoria_evento ";
                  $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                  $sql .= " INNER JOIN invitados ";
                  $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                  $sql .= " AND eventos.id_cat_evento = 1";
                  $sql .= " ORDER BY `evento_id` LIMIT 2;";
                  $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                  $sql .= " FROM eventos ";
                  $sql .= " INNER JOIN categoria_evento ";
                  $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                  $sql .= " INNER JOIN invitados ";
                  $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                  $sql .= " AND eventos.id_cat_evento = 2";
                  $sql .= " ORDER BY `evento_id` LIMIT 2;";
                  $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                  $sql .= " FROM eventos ";
                  $sql .= " INNER JOIN categoria_evento ";
                  $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                  $sql .= " INNER JOIN invitados ";
                  $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                  $sql .= " AND eventos.id_cat_evento = 3";
                  $sql .= " ORDER BY `evento_id` LIMIT 2;";
                } catch (\Exception $e) {
                  $error = $e->getMessage();
                }
              ?>
              <?php $conn->multi_query($sql);?>
              <?php
                do {
                  $resultado = $conn->store_result();
                  $row = $resultado->fetch_all(MYSQLI_ASSOC); ?>
                  <?php	$i = 0;?>
                  <?php	foreach($row as $evento): ?>
                    <?php	if($i % 2 == 0) { ?>
                      <div id="<?php echo strtolower($evento['cat_evento']) ?>" class="info-curso ocultar clearfix">
                        <?php	} ?>
                          <div class="detalle-evento">
                          <?php setlocale(LC_TIME, 'spanish'); ?> 
                            <h3><?php	echo mb_convert_encoding($evento['nombre_evento'], 'UTF-8'); ?></h3>
                            <p><i class="fas fa-clock" aria-hidden="true"></i><?php echo $evento['hora_evento'];?></p>
                            <p><i class="fas fa-calendar-day" aria-hidden="true"></i><?php echo $evento['fecha_evento'];?></p>
                            <p><i class="fas fa-user" aria-hidden="true"></i><?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado'];?></p>
                          </div>
                          <?php	if($i % 2 ==1):?>
                            <a href="calendario.php" class="button float-right">Ver todos</a>
                      </div>
                      <?php	endif; ?>
                      <?php $i++; ?>
                    <?php	endforeach; ?>
                    <?php $resultado->free(); ?>
                  <?php } while ($conn->more_results() && $conn->next_result()); ?>

          </div><!--programa-evento-->
        </div><!--contenedor-->
      </div><!--contenido-programa-->
    </section><!--programa-->

      <?php	include_once 'includes/templates/invitados.php'?>

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
              <a href="registro.php" class="button hollow">Comprar</a>
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
              <a href="registro.php" class="button">Comprar</a>
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
              <a href="registro.php" class="button hollow">Comprar</a>
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