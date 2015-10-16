<html>
	<head>
		<title>PHP-POO | CódigoFacilito</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="image/x-icon" href="../cf.jpg" rel="shortcut icon" />
	</head>
	<body>
		<h1>VIDEO 8: PHP Orientado a Objetos - Interfaces</h1>
		<a href="https://youtu.be/LZ1v5TtsyeE?list=PLWu1tG2bqxtulwpj_DfFaYMIBmF4IkgZd" target="blank">Link Del Video</a>
		<h3>Resulatdo</h3>





		<?php

			interface Auto{
				//Metodos
				public function encender();
				public function apagar();
			}

			interface Gasolina extends Auto{
				//Metodos
				public function vaciarTanque();
				public function llenarTanque($cant);
			}

			class Deportivo implements Gasolina{

				//Atributos
				private $estado = false;
				private $tanque = 0;

				//Metodos
				public function estado(){
					if($this->estado) print 'El auto esta encendido y tiene '.$this->tanque.' Litros de gasolina en el tanque<br>';
					else print 'El auto esta apagado<br>';
				}

				public function encender(){
					if($this->estado){
						print 'No se puede encender el auto 2 veces<br>';
					}else{
						if($this->tanque <= 0){
							print 'Usted no puede encender el auto porque el tanque esta vacio<br>';
						}else{
							print 'Auto encendido<br>';
							$this->estado = true;
						}
					}
				}

				public function apagar(){
					if($this->estado){
						print 'Auto apagado <br>';
						$this->estado = false;
					}else{
						print 'El auto ya esta apagado <br>';
					}
				}

				public function vaciarTanque(){
					$this->tanque = 0;
				}

				public function llenarTanque($cant){
					$this->tanque = $cant;
				}

				public function usar($km){
					if($this->estado){
						$reducir = $km / 3;
						$this->tanque = $this->tanque - $reducir;
						if($this->tanque <= 0) $this->estado = false;
					}else{
						print 'El auto esta apagado y no se puede usar <br>';
					}
				}
			}

			$obj = new Deportivo();
			$obj->llenarTanque(100);
			$obj->encender();
			$obj->usar(100);
			$obj->estado();
			$obj->vaciarTanque();
			$obj->usar(100);
			$obj->estado();
			$obj->encender();
		?>




		<br />
		<br />
		<br />
		<br />
		<a href="../index.html">Inicio</a>
	</body>
</html>