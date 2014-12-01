<?php
/**
 * Template Name: Web Movil
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

 ?>
<?php get_header('movil'); ?>
<?php include(TEMPLATEPATH."/php/mysql.php"); ?>
<?php $db = new MySQL(); ?>


<header>
        <div class="panel heder-movil radius">
                <div class="row">
                        <div class="small-12 columns text-center">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/images/valdivia41.jpg" width="300" height="110"  alt=""/>
                                <br/>
                                <h1>Tours valdivia</h1>
                        </div>
                </div>
        </div>
</header>

<div class="panel callout">

<?php if ( is_user_logged_in() ): ?><!--LOGEADO-->
        <?php $current_user = wp_get_current_user(); ?>
        <?php if ($current_user->user_status == 4 ): ?>
        	<?php $usuario = $current_user->user_login; ?>
        <section>
        <div class="row">
                <div class="small-12 columns text-center"><?php if (is_user_logged_in()): ?><?php $current_user = wp_get_current_user(); ?><h6 class="text-center">Bienvenido <?php echo $current_user->display_name; ?> <i class="fi-torso"></i> <a href="<?php echo wp_logout_url( $redirect ); ?>">(Salir)</a></h6><?php endif; ?></div>
        </div>
        <dl class="accordion" data-accordion>
                <dd class="accordion-navigation redondo">
                        <a href="#panel1">Buscar lugares turisticos</a>
                        <div id="panel1" class="content">
                        <!-------------------------------------------------------------------------------------------------------------------------------->



<?php $consulta = $db -> consulta("SELECT l.id_lugar AS id, l.descripcion AS descripcion, l.latitud AS latitud, l.longitud AS longitud, IFNULL(COUNT(lv.id_lugar),0) AS visitas FROM lugar l
LEFT JOIN lugares_visitados lv ON l.id_lugar = lv.id_lugar
GROUP BY l.id_lugar"); ?>
                                <?php if($db->num_rows($consulta)>0): ?>
                                        <ul>
                                                <?php while($resultados = $db->fetch_array($consulta)): ?>
                                                        <li><a <?php echo $color; ?> href="<?php bloginfo('url'); ?>/?page_id=42&lat=<?php echo $resultados['latitud']; ?>&long=<?php echo $resultados['longitud']; ?>&tipo=lugares&id=<?php echo $resultados[id]; ?>"><?php echo $resultados['descripcion']; ?>(<?php echo $resultados['visitas']; ?>)</a></li>
                                                <?php endwhile; ?>
                                        </ul>
                                <?php endif;  ?>


                                <!--<?php $consulta = $db -> consulta("SELECT * FROM lugar"); ?>
                                <?php if($db->num_rows($consulta)>0): ?>
                                        <ul>
	                                        <?php while($resultados = $db->fetch_array($consulta)): ?>
													<?php $descripcion = $resultados['descripcion']; ?>
													<?php $latitud = $resultados['latitud']; ?>
													<?php $longitud = $resultados['longitud']; ?>
													<?php $id_lugar =$resultados['id_lugar']; ?>
													<?php $consulta2 = $db -> consulta("SELECT count(*) AS visitas FROM lugares_visitados WHERE id_lugar = '$id_lugar' GROUP BY id_lugar"); ?>							
													<?php if($db->num_rows($consulta2) > 0): ?>
						                                <?php while($resultados = $db->fetch_array($consulta2)): ?>
															<?php $cantidad = $resultados['visitas']; ?>
																<?php $consulta3 = $db -> consulta("SELECT id_cliente_turismo FROM lugares_visitados WHERE id_lugar = '$id_lugar'"); ?>							
																<?php if($db->num_rows($consulta3) > 0): ?>
									                                <?php while($resultados = $db->fetch_array($consulta3)): ?>
																		<?php $cliente = $resultados['id_cliente_turismo']; ?>
																				<?php if ($cliente == $usuario): ?>
																					<?php $color = "style=color:green !important;"; ?>
																				<?php endif ?>
																	<?php endwhile; ?>
	                                                        			<li><a <?php echo $color; ?> href="<?php bloginfo('url'); ?>/?page_id=42&lat=<?php echo $latitud; ?>&long=<?php echo $longitud; ?>&tipo=lugares&id=<?php echo $id_lugar; ?>"><?php echo $descripcion; ?>(<?php echo $cantidad; ?>)</a></li>
	                                                        			<?php $color = "style=color:black !important;"; ?>
																<?php endif; ?>


						                                <?php endwhile; ?>
						                            <?php endif;  ?>

	                                        <?php endwhile; ?>
                                        </ul>
                                <?php endif;  ?>-->
                        <!-------------------------------------------------------------------------------------------------------------------------------->
                        </div>
                </dd>
                <dd class="accordion-navigation">
                        <a href="#panel2">Buscar pymes</a>
                        <div id="panel2" class="content">
                        <!-------------------------------------------------------------------------------------------------------------------------------->



<?php $consulta = $db -> consulta("SELECT * FROM tipo_pyme"); ?>
<?php if($db->num_rows($consulta)>0): ?>
<form action="<?php bloginfo('url'); ?>/?page_id=39" method="post">
    
        <div class="large-9 columns">
            <select name="filtro" id="">Seleccione un filtro
            <?php while($resultados = $db->fetch_array($consulta)): ?>
                <option value="<?php echo $resultados['id_tipo']; ?>"><?php echo $resultados['descripcion']; ?></option>
            <?php endwhile; ?>
            </select>    
        </div>
        <div class="large-3 columns">
            <input type="submit" value="Filtrar" class="button expand tiny">
        </div>
    
</form>
<?php endif;  ?>
<div class="row"><br></div>

<?php if (isset($_POST['filtro'])): ?>
<?php $filtra = $_POST['filtro'] ?>
<?php $consulta = $db -> consulta("SELECT p.id_pyme AS id, p.latitud AS latitud, p.longitud AS longitud, p.descripcion AS descripcion, IFNULL(COUNT(pv.id_pyme),0) AS visitas FROM pyme p
LEFT JOIN pyme_visitada pv ON p.id_pyme = pv.id_pyme
WHERE p.id_tipo = '$filtra'
GROUP BY p.id_pyme "); ?>
<?php else: ?>
<?php $consulta = $db -> consulta("SELECT p.id_pyme AS id, p.latitud AS latitud, p.longitud AS longitud, p.descripcion AS descripcion, IFNULL(COUNT(pv.id_pyme),0) AS visitas FROM pyme p
LEFT JOIN pyme_visitada pv ON p.id_pyme = pv.id_pyme
GROUP BY p.id_pyme "); ?>
    
<?php endif ?>


                                <?php if($db->num_rows($consulta)>0): ?>
                                        <ul>
                                                <?php while($resultados = $db->fetch_array($consulta)): ?>
                                                        <li><a href="<?php bloginfo('url'); ?>/?page_id=42&lat=<?php echo $resultados['latitud']; ?>&long=<?php echo $resultados['longitud']; ?>&tipo=pyme&id=<?php echo $resultados['id']; ?>"><?php echo $resultados['descripcion']; ?>(<?php echo $resultados['visitas'] ?>)</a></li>
                                                <?php endwhile; ?>
                                        </ul>
                                <?php endif;  ?>



                        <!-------------------------------------------------------------------------------------------------------------------------------->
                        </div>
                </dd>
                <dd class="accordion-navigation">
                        <a href="#panel3">Sobre Nosotros</a>
                        <div id="panel3" class="content">
                                
                                        <blockquote>
                                                <p>El turismo en Chile está muy bien valorado en el exterior, ya que nuestro país cuenta con climas fríos, templados, húmedos y 100% naturales, la zona sur del país tiene una amplia gama de ciudades, las cuales sus atractivos turísticos son el ingreso principal de las familias que viven en dicha ciudad. Ubicándonos en la región de los Ríos la cual tiene bellezas turísticas como la cuidad de Valdivia, la que cuenta con atractivos sitios como el Parque Oncol o el jardín botánico de la Universidad Austral de Chile e incluso esta ciudad tiene un balneario en la localidad de niebla (ubicada a 17 Kilómetros de la ciudad de Valdivia). 
                                                Los residentes en la ciudad de Valdivia, en épocas turísticas arriendan sus casas ó cabañas y con estos ingresos suelen sustentarse la primera mitad del año.</p>
                                                <p>La problemática que se presenta es la mala gestión turística que tiene la ciudad de Valdivia, dado que al entrar a la ciudad en vehículo no tienes como saber cuáles son los atractivos turísticos de la zona ni tampoco cual es el comercio que esta geográficamente cerca. Como solución se ofrece un punto de encuentro entre el turista y las zonas turísticas más el comercio geográficamente cercano, al cual ellos podrán acceder en todo momento y en cualquier lugar a través de una aplicación móvil que esté disponible en sus “Smartphone” en la cual encontraran información oportuna, vigente y real.</p>
                                                <p>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/images/logo-Gmail.png" width="15" height="12"  alt=""/> info@mail.cl<br>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/images/facebook_logo_detail.gif" width="15" height="12"  alt=""/> <a href="www.facebook.com"> Facebook </a><br>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/images/Twitter_logo_blue.png" width="15" height="12"  alt=""/> <a href="www.twitter.com"> Twitter </a>
                                                </p>
                                        </blockquote>
                                                <H3 class="text-center">Simon Monsalves <img src="<?php echo get_template_directory_uri(); ?>/img/images/64px-Cc.logo.circle.svg.png" width="25" height="25"  alt=""/></H3>
                                
                        </div>
                </dd>
        </dl>
</section>
<?php endif; ?>
<?php else: ?>
        <div class="row">
                <div class="small-12 columns">
                        <h2>Intranet</h2>
                        <div class="panel radius">
                                <div class="row">
                                        <div class="large-7 columns">
                                                <?php $args = array(
                                                        'echo'           => true,
                                                        'redirect' => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], // Default redirect is back to the current page
                                                        'form_id'        => 'loginform',
                                                        'label_username' => __( 'Correo' ),
                                                        'label_password' => __( 'Password' ),
                                                        'label_remember' => __( 'Remember Me' ),
                                                        'label_log_in'   => __( 'Log In' ),
                                                        'id_username'    => 'user_login',
                                                        'id_password'    => 'user_pass',
                                                        'id_remember'    => 'rememberme',
                                                        'id_submit'      => 'wp-submit',
                                                        'remember'       => true,
                                                        'value_username' => NULL,
                                                        'value_remember' => false
                                                ); ?>
                                                <?php wp_login_form($args); ?>  
                                                <a href="#" data-reveal-id="registro-cliente">Registrarse</a>
                                        </div>
                                        <div class="large-5 columns">
                                                <div class="row">
                                                        <div class="small-12 columns"></div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
<?php endif; ?>


<!-- AQUI VA CON EL MAPA -->
<div data-role="page" id="turismo">
  <div id="map" style=""> </div>
  <script src="http://map.google.com/maps/api/js?sensor=false"></script> 
</div>




        <div id="registro-cliente" class="reveal-modal tiny" data-reveal>
                <div class="row">
                        <form data-abide method="post" action="<?php echo get_template_directory_uri(); ?>/php/registro-cliente.php">
                        <div class="row">
                                <h3>Registro de clientes</h3>                           
                                

                                        <div class="name-field">
                                                <label>Nombre <small>required</small>
                                                        <input type="text" name="nombre" required>
                                                </label>
                                                <small class="error">El nombre es necesario</small>
                                        </div>
                                        <div class="email-field">
                                                <label>E-mail <small>required</small>
                                                        <input type="email" name="id" required>
                                                </label>
                                                <small class="error">El correo es necesario</small>
                                        </div>
                                        <div class="password-field">
                                                <label>Contraseña <small>required</small>
                                                        <input type="password" id="password" required pattern="[a-zA-Z]+">
                                                </label>
                                                <small class="error">Ingrese una contraseña</small>
                                        </div>
                                        <div class="password-confirmation-field">
                                                <label>Confirme la contraseña <small>required</small>
                                                        <input type="password" required pattern="[a-zA-Z]+" name="passwd" data-equalto="password">
                                                </label>
                                                <small class="error">Las contraseñas no coinciden</small>
                                        </div>
                        
                                <input type="submit" value="Enviar">
                        </div>
                        </form>
                </div>
        <a class="close-reveal-modal">&#215;</a>
        </div>






</div>
<script>
  $(document).foundation();
</script>

</body>
</html>
