<div class="box-principal">
	<h3 class="titulo">Agregar Estudiante</h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Agregar un nuevo estudiante</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label class="control-label" for="inputEmail">Nombre del estudiante</label>
							<input class="form-control" name="nombre" type="text" required>
						</div>
						<div class="form-group">
							<label class="control-label" for="inputEmail">Edad</label>
							<input class="form-control" name="edad" type="number" required>
						</div>
						<div class="form-group">
							<label class="control-label" for="inputEmail">Promedio</label>
							<input class="form-control" name="promedio" type="number" required>
						</div>
						<div class="form-group">
							<label class="control-label" for="inputEmail">Seccion</label>
							<select name="id_seccion" class="form-control">
								<?php while($row = $datos->fetch_object()){ ?>
									<option value="<?=$row->id?>"><?=$row->nombre?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label" for="inputEmail">Imagen</label>
							<input class="form-control" name="imagen" id="imagen" type="file" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success">Registrar</button>
							<button type="reset" class="btn btn-warning">Borrar</button>
						</div>
					</form>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</div>
</div>