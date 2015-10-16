<html>
	<head>
		<title>PHP-POO | CódigoFacilito</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="image/x-icon" href="../cf.jpg" rel="shortcut icon" />
	</head>
	<body>
		<h1>VIDEO 3: PHP Orientado a Objetos - Metodos y Atributos</h1>
		<a href="https://youtu.be/LZ1v5TtsyeE?list=PLWu1tG2bqxtulwpj_DfFaYMIBmF4IkgZd" target="blank">Link Del Video</a>
		<h3>Resulatdo</h3>





		<?php
			class Persona{
				//Atributos
				public $nombre = array();
 				public $apellido = array();

				//Metodos
				public function guardar($nombre, $apellido){
					$this->nombre[] = $nombre;
					$this->apellido[] = $apellido;
				}

				public function mostrar(){
					for ($i=0; $i < count($this->nombre); $i++) { 
						self::formato($this->nombre[$i], $this->apellido[$i]);
					}
				}

				public function formato($nombre, $apellido){
					echo 'Nombre: '.$nombre.' | Apellido: '.$apellido.'<br />';
				}
			}

			$persona = new Persona();
			$persona->guardar('Carlos', 'Fernandez');
			$persona->guardar('Uriel', 'Hernandez');
			$persona->mostrar();
		?>




		<br />
		<br />
		<br />
		<br />
		<a href="../index.html">Inicio</a>
	</body>
</html>