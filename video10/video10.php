<html>
	<head>
		<title>PHP-POO | CódigoFacilito</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="image/x-icon" href="../cf.jpg" rel="shortcut icon" />
	</head>
	<body>
		<h1>VIDEO 10: PHP Orientado a Objetos - Autoload</h1>
		<a href="https://youtu.be/q7aCX5SUrKs?list=PLWu1tG2bqxtulwpj_DfFaYMIBmF4IkgZd" target="blank">Link Del Video</a>
		<h3>Resulatdo</h3>





		<?php

			function autoCarga($clase){
				include 'clases/'.$clase.'.php';
			}
			spl_autoload_register('autoCarga');

			Persona::mostrar('Hola mundo');
			Auto::mostrar('CodigoFacilito');
		?>




		<br />
		<br />
		<br />
		<br />
		<a href="../index.html">Inicio</a>
	</body>
</html>