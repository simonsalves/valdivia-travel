<?php
/**
 * Template Name: Mapa
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

get_header(); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cufon-replace.js"></script>  
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/Myriad_Pro_600.font.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

<!-------------------JAVA SCRIPT-------------------------------->
<script type="text/javascript">
function inicializaGoogleMaps(pos) {
    // COORDENADAS PARA CENTRAR EL MAPA
    var x =-39.8180; 
    var y = -73.2547;
    var propiedades = { //OPCIONES DEL MAPA
        zoom: 15, //ZOOM DEL MAPA
        center: new google.maps.LatLng(x, y),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var mapa = new google.maps.Map(document.getElementById("mapa"), propiedades);

    var mkr = new google.maps.Marker({
			draggable: false, <!--  permite mover el icono -->
			position: centro,
			map: map
		 });
    
}

function newmap(x, y){
    	var x = x; 
    	var y = y;
    	var centro = new google.maps.LatLng(x, y);
	
	var propiedades = { //OPCIONES DEL MAPA
        	zoom: 18, //ZOOM DEL MAPA
        	center: new google.maps.LatLng(x, y),
        	mapTypeId: google.maps.MapTypeId.ROADMAP
    	}
	
	var mapa = new google.maps.Map(document.getElementById("mapa"), propiedades);

    	var marker = new google.maps.Marker({
		draggable: false, //permite mover el marcador
		position: centro, //posicion del marcador
		map: mapa,
		icon: 'gps.png'
	});
    
}


$(document).ready(function(){inicializaGoogleMaps()});
</script>


<div class="row">
	<div class="large-12 columns">
		<div id="mapa" style="width: 800px; height: 400px; margin:0 auto"> 
            En esta seccion usted podra acceder a la ubicacion exacta de los lugares turisticos y del mismo modo con las pymes
			
			</div>
	</div>
</div>
<br/>
<div class="row">
    <div class="large-2 columns">

		<div class="row">
		    <form method="post" action="<?php bloginfo('url'); ?>/?page_id=20" >
			<fieldset>
			    <legend>Buscar</legend>
			    	<div class="row">
						<div class="large-6 columns">PYME</div>
						<div class="large-6 columns">
							<div class="switch small">
								<input id="exampleRadioSwitch1" type="radio" name="clase" value="pyme">
								<label for="exampleRadioSwitch1"></label>
							</div> 
						</div>
					</div>
					<div class="row">
						<div class="large-6 columns">Lugar</div>
						<div class="large-6 columns">
							<div class="switch small">
								<input id="exampleRadioSwitch2" type="radio" name="clase" value="lugar">
								<label for="exampleRadioSwitch2"></label>
							</div> 
						</div>
					</div>
					<div class="row">
						<div class="large-12 columns">
							<input type="submit" name="mostrar" class="button expand tiny" value="Ver"><br/>
						</div>
					</div>
			  </fieldset>
		    </form>
		</div>
	</div>

	<div class="large-10 columns">
		

<?php if(isset($_REQUEST['mostrar']) && isset($_REQUEST['clase'])){ ?>
        
    <?php $clase = $_POST['clase'];?>   


        <?php include(TEMPLATEPATH."/php/mysql.php"); ?>
        <?php $db = new MySQL(); ?>
        <?php $consulta = $db -> consulta("SELECT * FROM $clase"); ?>
        <?php if($db->num_rows($consulta)>0): ?>
            <table>
				<thead>
					<tr>
						<th colspan="6" width="100%"><center><?php echo strtoupper($clase); ?></center></th>
					</tr>
				</thead>
                <tr>
                    <td width="10%">Descripcion</td>
                    <td width="10%">Direccion</td>
                    <td width="10%">Telefono</td>
                    <td width="10%">Horario</td>
                    <td width="10%">URL</td>
                    <td width="10%">Correo</td>
                </tr>
                <?php while($resultados = $db->fetch_array($consulta)): ?>
                    <tr>
                        <td><a href="#" onClick="newmap(<?php echo $resultados['latitud']; ?>, <?php echo $resultados['longitud']; ?>);" title="Haga click para ver en el mapa"><?php echo $resultados['descripcion']; ?></a></td>
                        <td><?php echo $resultados['direccion']; ?></td>
                        <td><?php echo $resultados['telefono']; ?></td>
                        <td><?php echo $resultados['horario']; ?></td>
                        <td><a href="<?php echo $resultados['url']; ?>" target="_blank"><?php echo $resultados['url']; ?></a></td>
                        <td><?php echo $resultados['correo']; ?></td>
                    </tr>
                <?php endwhile; ?>
                <tr>
                    <td>Total</td><td colspan="5"><?php echo $db->num_rows($consulta); ?></td>
                </tr>
            </table>
        <?php endif; } ?>

	</div>
    
</div>
<?php get_footer(); ?>
