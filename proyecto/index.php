<?php

	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	define('URL', 'http://localhost/PHP-POO/proyecto/');

	require_once 'Config/Autoload.php';
	Config\Autoload::run();
	require_once 'Views/template.php';
	Config\Enrutador::run(new Config\Request());

	/*
	$est = new Models\Estudiante();
	$est->set('id', 2);
	$datos = $est->view();
	print $datos->nombre;*/
?>