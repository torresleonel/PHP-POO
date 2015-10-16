<html>
	<head>
		<title>PHP-POO | CódigoFacilito</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="image/x-icon" href="../cf.jpg" rel="shortcut icon" />
	</head>
	<body>
		<h1>VIDEO 7: PHP Orientado a Objetos - Static</h1>
		<a href="https://youtu.be/tOGABgAhLHo?list=PLWu1tG2bqxtulwpj_DfFaYMIBmF4IkgZd" target="blank">Link Del Video</a>
		<h3>Resulatdo</h3>





		<?php
			class Pagina{
				//Atributos
				public $nombre = 'Codigo Facilito';
				public static $url = 'www.codigofacilito.com';

				//Metodos
				public function bienvenida(){
					echo 'Bienvenidos a <b>'.$this->nombre.'</b> la pagina es <b>'.self::$url.'</b><br>';
				}

				public static function bienvenida2(){
					echo 'Bienvenidos '.self::$url.'<br>';
				}
			}

			class Web extends Pagina{

			}

			Web::bienvenida2();
			$pagina = new Pagina();
			$pagina->bienvenida();
			$pagina->bienvenida2();
		?>




		<br />
		<br />
		<br />
		<br />
		<a href="../index.html">Inicio</a>
	</body>
</html>