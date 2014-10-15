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
var misPuntos = [
    ["torreon-norte", "-39.818020", "-73.232784", "icon", "<div>html</div>"],
    ["TORREON-SUR", "-39.817651", "-73.248651", "icon", "<div>html</div>"]
];

function inicializaGoogleMaps() {
    // COORDENADAS PARA CENTRAR EL MAPA
    var x =-39.818020; 
    var y = -73.254729;
    var propiedades = { //OPCIONES DEL MAPA
        zoom: 13, //ZOOM DEL MAPA
        center: new google.maps.LatLng(x, y),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    var mapa = new google.maps.Map(document.getElementById("mapa"), propiedades);
    setGoogleMarkers(mapa, misPuntos);
}

var markers = Array();
var infowindowActivo = false;
function setGoogleMarkers(mapa, locations) {
    // ICONO
    var icon = new google.maps.MarkerImage('gps.png', new google.maps.Size(48, 48));

    for(var i=0; i<locations.length; i++) {
        var elPunto = locations[i];
        var myLatLng = new google.maps.LatLng(elPunto[1], elPunto[2]);

        markers[i]=new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: eval(elPunto[3]),
            title: elPunto[0]
        });
        markers[i].infoWindow=new google.maps.InfoWindow({
            content: elPunto[0]
        });
        google.maps.event.addListener(markers[i], 'click', function(){      
            if(infowindowActivo)
                infowindowActivo.close();
            infowindowActivo = this.infoWindow;
            infowindowActivo.open(map, this);
        });
    }
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

<?php get_footer(); ?>