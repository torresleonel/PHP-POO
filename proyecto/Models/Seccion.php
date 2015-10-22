<?php namespace Models;

	class Seccion{
		private $id;
		private $nombre;
		private $con;

		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function listar(){
			$sql = "SELECT * FROM seccion";
			$datos = $this->con->ejecutarObtener($sql);
			return $datos;
		}

		public function add(){
			$sql = "INSERT INTO seccion(id, nombre) VALUES (null, '{$this->nombre}')";
			$this->con->ejecutar($sql);
		}

		public function delete(){
			$sql = "DELETE FROM seccion WHERE id = '{$this->id}'";
			$this->con->ejecutar($sql);
		}

		public function edit(){
			$sql = "UPDATE seccion SET nombre = '{$this->nombre}' WHERE id = '{$this->id}'";
			$this->con->ejecutar($sql);
		}

		public function view(){
			$sql = "SELECT * FROM seccion WHERE id = '{$this->id}'";
			$datos = $this->con->ejecutarObtener($sql);
			$fila = $datos->fetch_object();
			return $fila;
		}
	}
?>