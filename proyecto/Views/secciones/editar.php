<div class="box-principal">
	<h3 class="titulo">Editar Secciones</h3>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title">Editar seccion: <?=$datos->nombre?></h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<form class="form-horizontal" action="" method="POST">
						<div class="form-group">
							<label class="control-label" for="inputEmail">Nombre de la seccion</label>
							<input class="form-control" value="<?=$datos->nombre?>" name="nombre" type="text" required>
						</div>
						<input value="<?=$datos->id?>" name="id" type="hidden">
						<div class="form-group">
							<button type="submit" class="btn btn-success">Editar</button>
							<button type="reset" class="btn btn-warning">Borrar</button>
						</div>
					</form>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</div>
</div>