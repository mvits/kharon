<?php
if (! isset ( $GLOBALS ["autorizado"] )) {
	include ("../index.php");
	exit ();
}
class registrarForm {
	var $miConfigurador;
	var $lenguaje;
	var $miFormulario;
	var $miSql;
	function __construct($lenguaje, $formulario, $sql) {
		$this->miConfigurador = \Configurador::singleton ();
		
		$this->miConfigurador->fabricaConexiones->setRecursoDB ( 'principal' );
		
		$this->lenguaje = $lenguaje;
		
		$this->miFormulario = $formulario;
		
		$this->miSql = $sql;
	}
	function miForm() {
		
		/**
		 * IMPORTANTE: Este formulario está utilizando jquery.
		 * Por tanto en el archivo ready.php se delaran algunas funciones js
		 * que lo complementan.
		 */
		// Rescatar los datos de este bloque
		$conexion = "estructura";
		
		$esteRecursoDE = $this->miConfigurador->fabricaConexiones->getRecursoDB ( $conexion );
		
		
		
		if (isset($_REQUEST ['informacion'])) {
		
			switch ($_REQUEST ['informacion']) {
		
				case "ZonaEstudio" :
					$variable=1;
					break;
		
				case "Consulta1" :
					$variable=2;
					break;
				case "Consulta2" :
					$variable=3;
					break;
				case "Consulta3" :
					$variable=4;
					break;
				case "Consulta4" :
					$variable=5;
					break;
				case "Consulta5" :
					$variable=6;
					break;
			}
			
		
			$atributos ['cadena_sql'] =$this->miSql->getCadenaSql ( "ConsultarMapa",$variable );
		
			$enlaceMapa = $esteRecursoDE->ejecutarAcceso ( $atributos ['cadena_sql'], "busqueda" );
		
			
			echo $enlaceMapa[0]['enlace'];
		
		}else{
			echo"<div id='contenido'></div>";
			
		}

		
		return true;
	}
}
$miSeleccionador = new registrarForm ( $this->lenguaje, $this->miFormulario, $this->sql );
$miSeleccionador->miForm ();
?>		