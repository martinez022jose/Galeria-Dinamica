<!DOCTYPE html>
<html>
<head>
	<title>Panel De Control</title>
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
		<form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data" class="formRegistro">
			<div class="cajaInformacion">
				<h1>Registro Imagen</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
				
			</div>
			
			<?php include("validacionRegistroItem.php")?>
			
			<div class="cajaItems">
				<label>Codigo Imagen: </label><input type="text" name="codigo" placeholder="Ingrese Nombre">
				<label>Descripcion:</label><textarea name="descripcion" placeholder="Ingrese Descripcion"></textarea>
				<label>Imagen:</label><input type="file" name="imagen" placeholder="Ingrese Imagen">
				<input type="submit" name="submit" value="Registrar" id="registrar">
			</div>
		</form>
	</section>

</body>
</html>