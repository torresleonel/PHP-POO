<h3>Vista del estudiante principal.</h3>
<?php
	$datos = $estudiantes->index();
	while ($row = $datos->fetch_object()) {
		echo $row->nombre;
	}
?>