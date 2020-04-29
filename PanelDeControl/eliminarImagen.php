<!DOCTYPE html>
<html>
<head>
	<title>Panel De Control</title>
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
			<a href="eliminarImagen.php">Eliminar Imagen Segun</a>
		</nav>
	</header>
	<section>
		<form method="POST" class="formDelete" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" class="formDelete">

			<div class="encabezado">
				<h1>¿Desea Eliminar Imagenes?</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			    </p>
			</div>

			<?php include("validarDeleteImagen.php") ?>
			<label>Se eliminara segun:</label>
			<select class="select" name="opciones[]">
				<option class="idImagen" name="id" value="IdImagen">IdImagen</option>
			    <option class="nombre" name="name">Nombre</option>
			    <option class="referencia" name="ref">Referencia</option>
			</select>
			<input type="text" name="deleteItem" placeholder="Ingrese Valor Segun Criterio">
			<input type="submit" name="submit" value="Delete" id="delete">
		</form>
	</section>

</body>
</html>