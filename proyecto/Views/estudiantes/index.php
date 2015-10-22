<div class="box-principal">
	<h3 class="titulo">Listado de Estudiantes</h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Listado de estudiantes</h3>
		</div>
		<div class="panel-body">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Imagen</th>
						<th>ID</th>
						<th>Nombre</th>
						<th>Edad</th>
						<th>Seccion</th>
						<th>Promedio</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($row = $datos->fetch_object()) { ?>
							<tr>
								<td><img class="imagen-avatar" src="<?=URL?>Views/template/imagenes/avatars/<?=$row->imagen?>"></td>
								<td><?=$row->id?></td>
								<td><a href="<?=URL?>estudiantes/ver/<?=$row->id?>"><?=$row->nombre?></a></td>
								<td><?=$row->edad?></td>
								<td><?=$row->nombre_seccion?></td>
								<td><?=$row->promedio?></td>
								<td>
									<a class="btn btn-warning" href="<?=URL?>estudiantes/editar/<?=$row->id?>">Editar</a>
									<a class="btn btn-danger" href="<?=URL?>estudiantes/eliminar/<?=$row->id?>">Eliminar</a>
								</td>
							</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>