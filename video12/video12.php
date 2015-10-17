<html>
	<head>
		<title>PHP-POO | CódigoFacilito</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="image/x-icon" href="../cf.jpg" rel="shortcut icon" />
	</head>
	<body>
		<h1>VIDEO 12: PHP Orientado a Objetos - Namespaces</h1>
		<a href="https://youtu.be/7ETYvGi4m18?list=PLWu1tG2bqxtulwpj_DfFaYMIBmF4IkgZd" target="blank">Link Del Video</a>
		<h3>Resulatdo</h3>





		<?php

			spl_autoload_register(function($clase){

				$ruta = 'api/'.str_replace('\\', '/', $clase).'.php';
				if(is_readable($ruta)){
					require_once($ruta);
				}else{
					echo 'El archivo no existe';
				}
			});

			require_once('api/Model/Persona.php');
			require_once('api/Controller/PersonaController.php');

			Model\Persona::hola();
			Controller\PersonaController::hola();

		?>




		<br />
		<br />
		<br />
		<br />
		<a href="../index.html">Inicio</a>
	</body>
</html>