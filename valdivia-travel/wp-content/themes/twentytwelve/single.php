<?php
/**
 * The Template for displaying all single posts
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

function newmap(x, y){
	var x = x; 
    var y = y;
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


<!--	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->

				<!--<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	<!--</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>