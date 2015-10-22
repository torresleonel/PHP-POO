<?php $secciones = $estudiantes->listarSecciones(); ?>
<div class="box-principal">
	<h3 class="titulo">Editar Estudiante: <?=$datos->nombre?></h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Editar estudiante</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<img class="img-responsive" src="<?=URL?>Views/template/imagenes/avatars/<?=$datos->imagen?>">
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label class="control-label" for="inputEmail">Nombre del estudiante</label>
							<input class="form-control" value="<?=$datos->nombre?>" name="nombre" type="text" required>
						</div>
						<div class="form-group">
							<label class="control-label" for="inputEmail">Edad</label>
							<input class="form-control" value="<?=$datos->edad?>" name="edad" type="number" required>
						</div>
						<div class="form-group">
							<label class="control-label" for="inputEmail">Promedio</label>
							<input class="form-control" value="<?=$datos->promedio?>" name="promedio" type="number" required>
						</div>
						<div class="form-group">
							<label class="control-label" for="inputEmail">Seccion (<b>Seccion Actual: <?=$datos->nombre_seccion?> </b>)</label>
							<select name="id_seccion" class="form-control">
								<?php while($row = $secciones->fetch_object()){ ?>
									<option value="<?=$row->id?>"><?=$row->nombre?></option>
								<?php } ?>
							</select>
						</div>
						<input value="<?=$datos->id?>" name="id" type="hidden" required>
						<div class="form-group">
							<button type="submit" class="btn btn-success">Editar</button>
							<button type="reset" class="btn btn-warning">Borrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>