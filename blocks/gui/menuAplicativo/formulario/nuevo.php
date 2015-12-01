<?php
$esteBloque = $this->miConfigurador->getVariableConfiguracion ( "esteBloque" );
$rutaBloque = $this->miConfigurador->getVariableConfiguracion ( "host" );
$rutaBloque .= $this->miConfigurador->getVariableConfiguracion ( "site" ) . "/blocks/";
$rutaBloque .= $esteBloque ['grupo'] . "/" . $esteBloque ['nombre'];

$directorio = $this->miConfigurador->getVariableConfiguracion ( "host" );
$directorio .= $this->miConfigurador->getVariableConfiguracion ( "site" ) . "/index.php?";
$directorio .= $this->miConfigurador->getVariableConfiguracion ( "enlace" );


// **********Index Inicio**************//

$enlaceIndexAplicativo ['enlace'] = "pagina=index";

$enlaceIndexAplicativo ['urlCodificada'] = $this->miConfigurador->fabricaConexiones->crypto->codificar_url ( $enlaceIndexAplicativo ['enlace'], $directorio );

// **********Gestión Zona Estudio**************//

$enlaceZonaEstudio ['enlace'] = "pagina=index";
$enlaceZonaEstudio ['enlace'] = "&informacion=ZonaEstudio";

$enlaceZonaEstudio ['urlCodificada'] = $this->miConfigurador->fabricaConexiones->crypto->codificar_url ( $enlaceZonaEstudio ['enlace'], $directorio );


// **********Consultas**************//

$enlaceConsulta1 ['enlace'] = "pagina=index";
$enlaceConsulta1 ['enlace'] = "&informacion=Consulta1";

$enlaceConsulta1 ['urlCodificada'] = $this->miConfigurador->fabricaConexiones->crypto->codificar_url ( $enlaceConsulta1 ['enlace'], $directorio );



$enlaceConsulta2 ['enlace'] = "pagina=index";
$enlaceConsulta2 ['enlace'] = "&informacion=Consulta2";

$enlaceConsulta2 ['urlCodificada'] = $this->miConfigurador->fabricaConexiones->crypto->codificar_url ( $enlaceConsulta2 ['enlace'], $directorio );



$enlaceConsulta3 ['enlace'] = "pagina=index";
$enlaceConsulta3 ['enlace'] = "&informacion=Consulta3";

$enlaceConsulta3 ['urlCodificada'] = $this->miConfigurador->fabricaConexiones->crypto->codificar_url ( $enlaceConsulta3 ['enlace'], $directorio );


$enlaceConsulta4 ['enlace'] = "pagina=index";
$enlaceConsulta4 ['enlace'] = "&informacion=Consulta4";

$enlaceConsulta4 ['urlCodificada'] = $this->miConfigurador->fabricaConexiones->crypto->codificar_url ( $enlaceConsulta4 ['enlace'], $directorio );


$enlaceConsulta5 ['enlace'] = "pagina=index";
$enlaceConsulta5 ['enlace'] = "&informacion=Consulta5";

$enlaceConsulta5 ['urlCodificada'] = $this->miConfigurador->fabricaConexiones->crypto->codificar_url ( $enlaceConsulta5 ['enlace'], $directorio );






?>
<header id="head">
	<div class="container">
    	<nav id="menu">
    		<input type="checkbox" id="toggle-nav"/>
    		<label id="toggle-nav-label" for="toggle-nav"><i class="icon-reorder"></i></label>
    		
    		<div class="box">
	    		<ul>
	    			<li><a href="<?php echo $enlaceIndexAplicativo['urlCodificada']; ?>"><i class="icon-home"></i>Inicio</a></li>
	    			<li><a href="<?php echo $enlaceZonaEstudio['urlCodificada']; ?>"><i class="icon-location-arrow"></i>Información Geográfica</a></li>
	    			<br>
	    			<li><a href="<?php echo $enlaceConsulta1 ['urlCodificada'];?>"><i class="icon-share-sign"></i>¿Cuáles son los municipios que se encuentran en grado de amenaza 'Alto' del Volcán Galéras?</a></li>
	    			<br>
	    			<li><a href="<?php echo $enlaceConsulta2 ['urlCodificada'];?>"><i class="icon-share-sign"></i>¿Cuál es el municipio con mayor riesgo dado la zona de influencia del RÍO PATÍA la cual esta relacionada con el área del ronda de río de 30 Metros ?</a></li>
	    			<br>
	    			<li><a href="<?php echo $enlaceConsulta3 ['urlCodificada'];?>"><i class="icon-share-sign"></i>¿Cuál es el Municipio con Mayor Cantidad de Eventos Sísmicos en el departamento de Nariño desde el año 2005?</a></li>
	    			<br>
	    			<li><a href="<?php echo $enlaceConsulta4 ['urlCodificada'];?>"><i class="icon-share-sign"></i>¿Cuáles son los municipios del departamento de Nariño que fueron afectados por un sismo de mayor magnitud en un  radio de 100 Kilómetros en los últimos 5 años?</a></li>
	    			<br>	
	    			<li><a href="<?php echo $enlaceConsulta5 ['urlCodificada'];?>"><i class="icon-share-sign"></i>¿Cuál es la Cuenca Hidrográfica que posee mayor área de influencia de la amenaza Volcánica de grado 'Alto' del Volcán Galéras?</a></li>	    			
	    		</ul>
    		</div>
    		
    	</nav>
	</div>
</header>


