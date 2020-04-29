<?php

include ("../Conexion/conexion.php");
$errores = Array();
$mensajeExitoso = Array();

$idImagen;

if(isset($_POST['submit'])){
	if(empty($_POST['deleteItem'])){
		array_push($errores,"<p class='error'>*Debe completar el campo</p>");
	}else{
		$idImagen = $_POST['deleteItem'];
		
		$opciones = $_REQUEST['opciones'];
		
		if(validarExistenciaDeId($idImagen,$conexion)){
			deleteItem($idImagen,$conexion);
			array_push($mensajeExitoso,"<p class='mensajeExitoso'>Se elimino de manera exitosa</p>");
		}else{
			array_push($errores,"<p class='error'>*Codigo ingresado no valido</p>");}
	}
}

recorrerElementos($errores);
recorrerElementos($mensajeExitoso);

function validarExistenciaDeId(&$idImagen,$conexion){
	$query="SELECT *FROM imagen WHERE idImagen='$idImagen'";
		$resultado = mysqli_query($conexion,$query);
		$fila = mysqli_fetch_array($resultado);
		return $fila>0;
}

function deleteItem(&$idImagen,$conexion){
	$query = "DELETE FROM imagen WHERE idImagen = '$idImagen'";
	mysqli_query($conexion,$query);

}

function recorrerElementos($elementos){
	for($i=0;$i<count($elementos);$i++){
           echo $elementos[$i];
       }
};


?>