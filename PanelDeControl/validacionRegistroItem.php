<?php
include("../Conexion/conexion.php");

//Declaracion de variables 
$errores = array();
$mensajeExitoso = array();
$idImagen;
$descripcion;
$miArchivo;

if(isset($_POST['submit'])){

	if(empty($_POST['codigo']) || empty($_POST['descripcion']) || empty($_FILES['imagen'])){

		array_push($errores,"<p class='error'>*Debe completarse todos los campos</p>");
	}else{
		
		obtenerValores($idImagen,$descripcion,$miArchivo);
	

		if(validarIngreso($idImagen,$conexion)){
			array_push($errores,"<p class='error'>Codigo de imagen ya existen</p>");
		}else{

			if(insertaImagen($idImagen,$descripcion,$miArchivo,$conexion)){
				array_push($mensajeExitoso,"<p class='mensajeExitoso'> Se ha ingresado la imagen de manera exitosa</p>");
			}
			else{
				array_push($errores,"<p class='error'>No se ha podido agregar imagen</p>");
			}
		}
	}

	recorrerElementos($errores);
	recorrerElementos($mensajeExitoso);
}

//Declaracion de funciones 

function obtenerValores(&$idImagen,&$descripcion,&$miArchivo){
	$idImagen=$_POST['codigo'];
	$descripcion=$_POST['descripcion'];
	$ruta ="../Imagenes/";
    $miArchivo = $_FILES['imagen']['name'];
    move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta.$_FILES['imagen']['name']);
    $miArchivo = $ruta.$miArchivo;
};

function insertaImagen($idImagen,$descripcion,$miArchivo,$conexion){
    $insertadoDeImagen = "INSERT INTO imagen(idImagen,descripcion,url) 
                          VALUES ('$idImagen','$descripcion','$miArchivo')";
    $resultado = mysqli_query($conexion,$insertadoDeImagen);
    return $resultado;
    
};

function validarIngreso($idImagen,$conexion){
	$validacionDeIngreso = "SELECT *FROM imagen WHERE idImagen ='$idImagen'";
	$resultado = mysqli_query($conexion,$validacionDeIngreso);
	$filas = mysqli_fetch_array($resultado);
	return $filas >0;
};

function recorrerElementos($elementos){
	for($i=0;$i<count($elementos);$i++){
           echo $elementos[$i];
       }
};



?>