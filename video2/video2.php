<html>
	<head>
		<title>PHP-POO | CódigoFacilito</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="image/x-icon" href="../cf.jpg" rel="shortcut icon" />
	</head>
	<body>
		<h1>VIDEO 2: PHP Orientado a Objetos - Clases y Objetos</h1>
		<a href="https://youtu.be/9cb6zgw68n4?list=PLWu1tG2bqxtulwpj_DfFaYMIBmF4IkgZd" target="blank">Link Del Video</a>
		<h3>Resulatdo</h3>





		<?php
			class Persona{
				//Atributos
				public $nombre = 'Pedro';

				//Metodos
				public function hablar($mensaje){
					echo $mensaje;
				}
			}

			$persona = new Persona();
			echo $persona->nombre;
			$persona->hablar('Saludos desde CodigoFacilito');
		?>




		<br />
		<br />
		<br />
		<br />
		<a href="../index.html">Inicio</a>
	</body>
</html>