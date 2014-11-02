<?php
/**
 * Template Name: Mapa movil
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

<?php 
	$lat = $_GET['lat'];
	$long = $_GET['long'];
?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cufon-replace.js"></script>  
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/Myriad_Pro_600.font.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>


<a id="estoy" href="#" data-lat="<?php echo $lat; ?>" data-lon="<?php echo $long; ?>"></a>

<div id="mapa" style="width:100%; height:100%; margin:0 auto"> 
	En esta seccion usted podra acceder a la ubicacion exacta de los lugares turisticos y del mismo modo con las pymes
</div>


<!-------------------JAVA SCRIPT-------------------------------->
<script type="text/javascript">


$(document).on('ready', function(){
	navigator.geolocation.getCurrentPosition(mapa, error);
});
function mapa(pos)
	{
		var contenedor = document.getElementById("mapa");
		var latitud = pos.coords.latitude;
		var longitud = pos.coords.longitude;
		var lat = $('#estoy').attr('data-lat');
		var lon = $('#estoy').attr('data-lon');

		var origen = new google.maps.LatLng(latitud, longitud);
		var destino = new google.maps.LatLng(lat, lon);
		var medio = google.maps.TravelMode.DRIVING;
		var propiedades = {
			origin: origen,
			destination: destino,
			travelMode: medio
		 };
		 
		 var map = new google.maps.Map(contenedor, propiedades);
	}
	
	function error(errorC)
	{
		if(errorC.code == 0)
			alert("Error desconocido");
		if(errorC.code == 1)
			alert("No me dejaste ubicarte :(")
		if(errorC.code == 2)
			alert("me rendi");
	}

	
</script>

<?php wp_footer(); ?>
</body>
</html>
