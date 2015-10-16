<html>
	<head>
		<title>PHP-POO | CódigoFacilito</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="image/x-icon" href="../cf.jpg" rel="shortcut icon" />
	</head>
	<body>
		<h1>VIDEO 11: PHP Orientado a Objetos - Traits</h1>
		<a href="https://youtu.be/54r7LaWIfWo?list=PLWu1tG2bqxtulwpj_DfFaYMIBmF4IkgZd" target="blank">Link Del Video</a>
		<h3>Resulatdo</h3>





		<?php

			trait Persona2{

				public $nombre;

				public function mostrarNombre(){
					echo $this->nombre;
				}

				abstract function asignarNombre($nombre);
			}

			trait Trabajador{
				protected function mensaje(){
					echo 'Mi nombre es: ';
				}
			}

			class Persona{
				use Persona2, Trabajador;
				public function asignarNombre($nombre){
					$this->nombre = $this->mensaje().$nombre;
				}
			}

			$persona = new Persona();
			$persona->asignarNombre('Leo');
			$persona->mostrarNombre();
			
		?>




		<br />
		<br />
		<br />
		<br />
		<a href="../index.html">Inicio</a>
	</body>
</html>