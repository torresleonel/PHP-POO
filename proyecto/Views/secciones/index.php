<div class="box-principal">
	<h3 class="titulo">Listado de Secciones</h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Listado de Secciones</h3>
		</div>
		<div class="panel-body">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($row = $datos->fetch_object()) { ?>
							<tr>
								<td><?=$row->id?></td>
								<td><?=$row->nombre?></td>
								<td>
									<a class="btn btn-warning" href="<?=URL?>secciones/editar/<?=$row->id?>">Editar</a>
									<a class="btn btn-danger" href="<?=URL?>secciones/eliminar/<?=$row->id?>">Eliminar</a>
								</td>
							</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>