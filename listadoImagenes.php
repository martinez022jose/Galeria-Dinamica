<?php
include("conexion.php")
?>

<!DOCTYPE html>
<html>
<head>
	<title>Listado De Imagenes</title>
	<link rel="stylesheet" type="text/css" href="estiloGaleriaDinamica.css">
</head>
<body>
	<header>
		<div class="portada">
			<h1>Panel de control</h1>
		</div>
		<nav>
			<a href="registroItem.php">Resgitro Imagen</a>
			<a href="listadoImagenes.php">Listado De Imagenes</a>
			<a href="eliminarImagen.php">Eliminar Imagen</a>
		</nav>
	</header>
	<section>
		<div class="listadoImagenes">
			<div class="title">
				<h1>Listado De Imagenes</h1>
			</div>
			
			<div class="filaPrincipal">
					<div class="encabezadoIdImagen">Id Imagen</div>
					<div class="encabezadoDescripcion">Descripcion</div>
					<div class="encabezadoUrl">Imagen</div>
		    </div>

			<?php 
			$listaDeImagenes = "SELECT *FROM imagen";
			$resultado = mysqli_query($conexion,$listaDeImagenes);

			while($fila =mysqli_fetch_array($resultado)){?>
				<div class="fila">
					<div class=idImagen ><?php echo $fila['idImagen'] ?></div>
					<div class="descripcion"><?php echo $fila['descripcion'] ?></div>
					<div class="url">
						<img src="<?php echo $fila['url'] ?>">
					</div>
					
				</div>
			<?php }?>
			
		</div>
		
	</section>

</body>
</html>