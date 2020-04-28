<?php 

$id = $_REQUEST['idImagen'];

function obtenerFila($id){
	
	include("../Conexion/conexion.php");
	$queryImagen = "SELECT *FROM imagen WHERE idImagen ='$id'";
	$resultado = mysqli_query($conexion,$queryImagen);
	return mysqli_fetch_array($resultado);
}

if(isset($_POST['submit'])){
	include("../Conexion/conexion.php");
	$queryDelete = "DELETE FROM imagen WHERE idImagen = '$id'";
	$resultado = mysqli_query($conexion,$queryDelete);
	if($resultado){
		header("location:listadoImagenes.php");

	}else{
		echo "No se ha eliminado";
	}

    

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Eliminacion Directa</title>
	<link rel="stylesheet" type="text/css" href="../estiloGaleriaDinamica.css">
</head>
<body>
	<header>
		<div class="portada">
			<h1>Panel de control</h1>
		</div>
		<nav>
			<a href="panelDeControl.php">Inicio</a>
			<a href="registroItem.php">Resgitro Imagen</a>
			<a href="listadoImagenes.php">Listado De Imagenes</a>
			<a href="eliminarImagen.php">Eliminar Imagen</a>
		</nav>
	</header>

	<section>
		<?php $fila = obtenerFila($id)?>

		<form class="formDirecta" method="POST"  action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" >

			<div class="advertencia">
				<h1>¿Esta seguro de eliminar este registro?</h1>
		    </div>

			<div class="informacion">
			    <div id="item">Id Imagen: <p><?php echo $fila['idImagen'];?></p></div>
		        <div id="item">Descripcion:<p> <?php echo $fila['descripcion'];?></p></div>
		        <div id="item" class="cajaImagen">
		        	<p>Imagen: </p><img src="<?php echo $fila['url'];?>">
		        </div>
		    </div>
			
			<div class="inputs">
				<div class="redireccion" >
					<a href="listadoImagenes.php">Cancelar</a>
				</div>
				<input class="delete" type="submit" name="submit" value="Confirmar">
			</div>
			
		</form>
	</section>

</body>
</html>