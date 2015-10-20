<?php namespace Models;

	class Estudiante{
		private $id;
		private $nombre;
		private $edad;
		private $promedio;
		private $imagen;
		private $id_seccion;
		private $fecha;
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
			$sql = "SELECT t1.*, t2.nombre as nombre_seccion
					FROM estudiante t1
					INNER JOIN seccion t2 ON t1.id_seccion = t2.id";
			$datos = $this->con->ejecutarObtener($sql);
			return $datos;
		}

		public function add(){
			$sql = "INSERT INTO estudiante(id, nombre, edad, promedio, imagen, id_seccion, fecha)
					VALUES(null, '{$this->nombre}', '{$this->edad}', '{$this->promedio}', '{$this->imagen}', '{$this->id_seccion}', NOW())";
			$this->con->ejecutar($sql);
		}

		public function delete(){
			$sql = "DELETE FROM estudiante WHERE id = '{$this->id}'";
			$this->con->ejecutar($sql);
		}

		public function edit(){
			$sql = "UPDATE estudiante SET nombre = '{$this->nombre}', edad = '{$this->edad}', promedio = '{$this->promedio}', id_seccion = '{$this->id_seccion}' WHERE id = '{$this->id}'";
			$this->con->ejecutar($sql);
		}

		public function view(){
			$sql = "SELECT t1.*, t2.nombre as nombre_seccion
					FROM estudiante t1
					INNER JOIN seccion t2 ON t1.id_seccion = t2.id
					WHERE t1.id = '{$this->id}'";
			$datos = $this->con->ejecutarObtener($sql);
			$fila = $datos->fetch_object();
			return $fila;
		}
	}
?>