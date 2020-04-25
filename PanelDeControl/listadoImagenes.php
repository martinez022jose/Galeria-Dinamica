<?php
include("../Conexion/conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Listado De Imagenes</title>
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
		<div class="listadoImagenes">
			<div class="title">
				<h1>Listado De Imagenes</h1>
			</div>
			
			<div class="filaPrincipal">
					<div class="encabezadoPrincipal">Id Imagen</div>
					<div class="encabezadoPrincipal">Descripcion</div>
					<div class="encabezadoPrincipal">Imagen</div>
					<div class="encabezadoPrincipal">funcionalidad</div>
		    </div>

			<?php 
			$listaDeImagenes = "SELECT *FROM imagen";
			$resultado = mysqli_query($conexion,$listaDeImagenes);

			while($fila =mysqli_fetch_array($resultado)){?>
				<div class="fila">
					<div class="encabezadoSecundario" ><?php echo $fila['idImagen'] ?></div>
					<div class="encabezadoSecundario"><?php echo $fila['descripcion'] ?></div>
					<div class="url">
						<img src="<?php echo $fila['url'] ?>">
					</div>
					<div class="encabezadoSecundario">
						<a href="#">Eliminar</a>
					    <a href="#">Modificar</a>
					</div>
					
					
				</div>
			<?php }?>
			
		</div>
		
	</section>

</body>
</html>