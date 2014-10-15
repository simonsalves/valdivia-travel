<!DOCTYPE html>
<html lang="en">
<head>
<title>MAPA</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->

<!---JAVA SCRIPT-->
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
</script>

</head>
<body id="page3" onload=inicializaGoogleMaps()>
<div class="extra">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1><a href="index.html" id="logo">Around the Woorld</a></h1>
				<div class="right">
					<div class="wrapper">
						<form id="search" action="" method="post">
							<div class="bg">
								<input type="submit" class="submit" value="">
								<input type="text" class="input">
							</div>
						</form>
					</div>
					<div class="wrapper">
						<nav>
							<ul id="top_nav">
								<li><a href="#">Registrarse</a></li>
								<li><a href="login.html">Intranet</a></li>
								<li><a href="#">Ayuda</a></li>
							</ul>
						</nav>
					</div>	
				</div>
			</div>
			<nav>
				<ul id="menu">
					<li><a href="index.html" class="nav1">INICIO</a></li>
					<li><a href="About.html" class="nav2">NOSOTROS </a></li>
					<li><a href="Tours.php" class="nav3">MAPA</a></li>
					<li><a href="Destinations.html" class="nav4">DESTINOS</a></li>
					<li class="end"><a href="Contacts.html" class="nav5">ContactO</a></li>
				</ul>
			</nav>
			<!--  ACA VA EL MAPA -->
            
            <div id="mapa" style="width: 800px; height: 400px; margin:0 auto"> 
            En esta seccion usted podra acceder a la ubicacion exacta de los lugares turisticos y del mismo modo con las pymes
			
			</div>
            
            
            
		</header>
<!-- / header -->
<!-- contenido -->
		<form method="post" action="Tours.php" >
		Elija una opcion<br/><br/>
			<label>PYME <input type="radio" name="clase" value="pyme"/></label>
			<label>Lugar <input type="radio" name="clase" value="lugar"/></label><br/><br/>
			<input type="submit" name="mostrar" value="Mostrar"><br/>
		</form>





<?php
	require_once('funciones.php');
	conectar('localhost', 'root', '', 'tesis_p1');

	if(isset($_REQUEST['mostrar']) && isset($_REQUEST['clase'])){
		$clase = $_POST['clase'];?>

		<?php include("mysql.php"); ?>
		<?php $db = new MySQL(); ?>
		<?php $consulta = $db -> consulta("SELECT * FROM $clase"); ?>
		<?php if($db->num_rows($consulta)>0): ?>
			<table border="1">
				<tr><td colspan="6"><hr/></td></tr>
				<tr>
					<td width="10%">Descripcion</td>
					<td width="10%">Direccion</td>
					<td width="10%">Telefono</td>
					<td width="10%">Horario</td>
					<td width="10%">URL</td>
					<td width="10%">Correo</td>
				</tr>
				<tr><td colspan="6"><hr/></td></tr>
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
				<tr><td colspan="6"><hr/></td></tr>
				<tr>
					<td>Total de <?php echo $clase; ?></td><td colspan="5"><?php echo $db->num_rows($consulta); ?></td>
				</tr>
			</table>
		<?php endif; ?>
<?php } ?>

		



<!-- / fin del contenido -->
	</div>
	<div class="block"></div>
</div>
<div class="body1">
	<div class="main">
<!-- footer -->
		<footer>
			<a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a><br>
			<a href="http://www.templates.com/product/3d-models/" target="_blank" rel="nofollow">www.templates.com</a>
		</footer>
<!-- / footer -->
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>