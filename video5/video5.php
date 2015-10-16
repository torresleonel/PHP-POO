<html>
	<head>
		<title>PHP-POO | CódigoFacilito</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="image/x-icon" href="../cf.jpg" rel="shortcut icon" />
	</head>
	<body>
		<h1>VIDEO 5: PHP Orientado a Objetos - Modificadores de acceso</h1>
		<a href="https://youtu.be/BjLg4y01rII?list=PLWu1tG2bqxtulwpj_DfFaYMIBmF4IkgZd" target="blank">Link Del Video</a>
		<h3>Resulatdo</h3>





		<?php
			class Facebook{

				//Atributos
				public $nombre;
				public $edad;
				private $pass;

				//Metodos
				public function __construct($nombre, $edad, $pass) {
					$this->nombre = $nombre;
					$this->edad = $edad;
					$this->pass = $pass;
				}

				public function verInformacion() {
					echo 'Nombre: '.$this->nombre.'<br>';
					echo 'Edad: '.$this->edad.'<br>';
					echo 'Contraseña: '.$this->pass;
				}

				private function cambiarPass($pass) {
					$this->pass = $pass;
				}
			}

			$facebook = new Facebook('Leo', 26, '11gfd');
			$facebook->verInformacion();
		?>




		<br />
		<br />
		<br />
		<br />
		<a href="../index.html">Inicio</a>
	</body>
</html>