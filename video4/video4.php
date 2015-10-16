<html>
	<head>
		<title>PHP-POO | CódigoFacilito</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="image/x-icon" href="../cf.jpg" rel="shortcut icon" />
	</head>
	<body>
		<h1>VIDEO 4: PHP Orientado a Objetos - Constructures y Destructores</h1>
		<a href="https://youtu.be/ZxbRVpGwA84?list=PLWu1tG2bqxtulwpj_DfFaYMIBmF4IkgZd" target="blank">Link Del Video</a>
		<h3>Resulatdo</h3>





		<?php
			class Loteria{
				//Atributos
				public $numero;
				public $intentos;
				public $resultado = false;

				//Metodos
				public function __construct($numero, $intentos){
					$this->numero = $numero;
					$this->intentos = $intentos;
				}

				public function sortear(){
					$minimo = $this->numero / 2;
					$maximo = $this->numero * 2;
					for ($i=0; $i < $this->intentos; $i++) {
						$int = rand($minimo,$maximo); 
						self::intentos($int);
					}
				}

				public function intentos($int){
					if ($int == $this->numero) {
						echo '<b>'.$int.' == '.$this->numero.'</b><br>';
						$this->resultado  = true;
					}else{
						echo $int.' != '.$this->numero.'<br>';
					}
				}

				public function __destruct(){
					if ($this->resultado) {
						echo 'Felicidades, has ganado en '.$this->intentos.' intentos';
					}else{
						echo 'Que lastima, has perdido en '.$this->intentos.' intentos';
					}
				}
			}

			$loteria = new Loteria(10,10);
			$loteria->sortear();
		?>




		<br />
		<br />
		<br />
		<br />
		<a href="../index.html">Inicio</a>
	</body>
</html>