<?php
$esteBloque = $this->miConfigurador->getVariableConfiguracion ( "esteBloque" );
$rutaBloque = $this->miConfigurador->getVariableConfiguracion ( "host" );
$rutaBloque .= $this->miConfigurador->getVariableConfiguracion ( "site" ) . "/blocks/";
$rutaBloque .= $esteBloque ['grupo'] . "/" . $esteBloque ['nombre'];

$directorio = $this->miConfigurador->getVariableConfiguracion ( "host" );
$directorio .= $this->miConfigurador->getVariableConfiguracion ( "site" ) . "/index.php?";
$directorio .= $this->miConfigurador->getVariableConfiguracion ( "enlace" );
$miSesion = Sesion::singleton ();

// **********Index Inicio**************//

$enlaceIndexAplicativo ['enlace'] = "pagina=indexAplicativo";
// $enlaceIndexAplicativo ['enlace'] .= "&usuario=" . $_REQUEST ['usuario'];
$enlaceIndexAplicativo ['urlCodificada'] = $this->miConfigurador->fabricaConexiones->crypto->codificar_url ( $enlaceIndexAplicativo ['enlace'], $directorio );

// **********Gestión Zona Estudio**************//

$enlaceZonaEstudio ['enlace'] = "pagina=zonaEstudio";
// $enlaceZonaEstudio ['enlace'] .= "&usuario=" . $_REQUEST ['usuario'];
$enlaceZonaEstudio ['urlCodificada'] = $this->miConfigurador->fabricaConexiones->crypto->codificar_url ( $enlaceZonaEstudio ['enlace'], $directorio );
$enlaceZonaEstudio ['nombre'] = "Descripción Zona Estudio";





// **********Administrador Datos Geograficos**************//

$enlaceAdministradorGeografico ['enlace'] = "pagina=administrador";
// $enlaceAdministradorGeografico ['enlace'] .= "&usuario=" . $_REQUEST ['usuario'];
$enlaceAdministradorGeografico ['urlCodificada'] = $this->miConfigurador->fabricaConexiones->crypto->codificar_url ( $enlaceAdministradorGeografico ['enlace'], $directorio );
$enlaceAdministradorGeografico ['nombre'] = "Administrador";




// **********Visualizador Datos Geograficos**************//

$enlaceVisualizadorGeografico ['enlace'] = "pagina=visualizador";
// $enlaceVisualizadorGeografico ['enlace'] .= "&usuario=" . $_REQUEST ['usuario'];
$enlaceVisualizadorGeografico ['urlCodificada'] = $this->miConfigurador->fabricaConexiones->crypto->codificar_url ( $enlaceVisualizadorGeografico ['enlace'], $directorio );
$enlaceVisualizadorGeografico ['nombre'] = "Visualizador";




// **********Visualizador Datos Geograficos**************//

$enlaceAplicativo ['enlace'] = "index.php";
$enlaceAplicativo ['urlCodificada'] = $this->miConfigurador->fabricaConexiones->crypto->codificar_url ( $enlaceVisualizadorGeografico ['enlace'], $directorio );
$enlaceAplicativo ['nombre'] = "Cerrar Session";








?>
<header id="head">
	<div class="container">
    	<nav id="menu">
    		<input type="checkbox" id="toggle-nav"/>
    		<label id="toggle-nav-label" for="toggle-nav"><i class="icon-reorder"></i></label>
    		
    		<div class="box">
	    		<ul>
	    			<li><a href="#"><i class="icon-home"></i> home</a></li>
	    			<li><a href="#"><i class="icon-file-alt"></i> about</a></li>
	    			<li><a href="#"><i class="icon-copy"></i> works</a></li>
	    			<li><a href="#"><i class="icon-envelope"></i> contacts</a></li>
	    		</ul>
    		</div>
    		
    	</nav>
	</div>
</header>


