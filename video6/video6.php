<html>
	<head>
		<title>PHP-POO | CódigoFacilito</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="image/x-icon" href="../cf.jpg" rel="shortcut icon" />
	</head>
	<body>
		<h1>VIDEO 6: PHP Orientado a Objetos - Herencia</h1>
		<a href="https://youtu.be/mUWcVgA__KQ?list=PLWu1tG2bqxtulwpj_DfFaYMIBmF4IkgZd" target="blank">Link Del Video</a>
		<h3>Resulatdo</h3>





		<?php
			class Vehiculo{
				//Atributos
				public $motor = false;
				public $marca;
				public $color;

				//Metodos
				public function estado() {
					if($this->motor) echo 'El motor esta encendido<br>';
					else echo 'El motor esta apagado<br>';
				}

				public function encender() {
					if($this->motor) {
						echo 'Cuidado, el motor ya esta encendido<br>';
					}else {
						echo 'El motor ahora esta encendido<br>';
						$this->motor = true;
					}
				}
			}

			class Moto extends Vehiculo{

			}

			class CuatriMoto extends Moto{

			}

			$moto = new CuatriMoto();
			$moto->estado();
			$moto->encender();
			$moto->estado();
		?>




		<br />
		<br />
		<br />
		<br />
		<a href="../index.html">Inicio</a>
	</body>
</html>