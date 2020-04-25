<?php  
include("../Conexion/conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Galeria De Fotos</title>
	<link rel="stylesheet" type="text/css" href="../estiloGaleriaDinamica.css">
</head>
<body>
	<header>
		<div class="encabezado">
			<h1>Galeria De Imagenes</h1>
		</div>
	</header>
	
	<section>
		<div class="listaDeImagenes">
			<?php
			 $listaDeImagenes = "SELECT *FROM imagen";
             $resultado = mysqli_query($conexion,$listaDeImagenes);
            //$fila = mysqli_fetch_array($resultado);


			while($fila= mysqli_fetch_assoc($resultado)) {?>
			<div class="item">
				<div class="cajaImagen">
					<img src="<?php echo $fila['url'] ?>">
				</div>
				<div class="descripcionImagen"><?php echo $fila['descripcion'];?></div>
		    </div><?php }?>
		    
		</div>
	</section>

</body>
</html>