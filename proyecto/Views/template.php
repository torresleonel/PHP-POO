<?php namespace Views;
	
	$template = new Template();

	class Template{

		public function __construct(){
?>
			<!DOCTYPE html>
			<html lang="es">
				<head>
					<meta charset="UTF-8">
					<title>Admisnitracion de estudiantes | Codigo Facilito</title>
					<link rel="stylesheet" href="<?=URL?>Views/template/css/bootstrap.css">
				</head>
				<body>
<?php
		}

		public function __destruct(){
?>
				</body>
			</html>
<?php

		}

	}
?>