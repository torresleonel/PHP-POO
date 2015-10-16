<html>
	<head>
		<title>PHP-POO | CódigoFacilito</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="image/x-icon" href="../cf.jpg" rel="shortcut icon" />
	</head>
	<body>
		<h1>VIDEO 9: PHP Orientado a Objetos - Clases y Metodos abstractos</h1>
		<a href="https://youtu.be/cmVHqKdFtkQ?list=PLWu1tG2bqxtulwpj_DfFaYMIBmF4IkgZd" target="blank">Link Del Video</a>
		<h3>Resulatdo</h3>





		<?php

			abstract class Molde{

				abstract public function ingresarNombre($nombre);
				abstract public function obtenerNombre();

			}

			class Persona extends Molde{

				private $mensaje = 'Hola gente de codigoFacilito';
				private $nombre;

				public function mostrar(){
					print $this->mensaje;
				}

				public function ingresarNombre($nombre, $username = ' cf'){
					$this->nombre = $nombre.$username;
				}

				public function obtenerNombre(){
					print $this->nombre;
				}
			}

			$persona = new Persona();
			$persona->ingresarNombre('Leonel', ' Torres');
			$persona->obtenerNombre();
		?>




		<br />
		<br />
		<br />
		<br />
		<a href="../index.html">Inicio</a>
	</body>
</html>