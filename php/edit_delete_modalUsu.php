
<!-- Editar -->
<div class="modal fade" id="edit_<?php echo $row['codigo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<center><h4 class="modal-title" id="myModalLabel">Editar miembro</h4></center>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form id="formu" name="formu" method="POST" action="./php/editUsu.php">
						<div class="form-group">
							<label>Codigo</label>
							<input class="form-control" type="text" name="codigo" value="<?php echo $row['codigo']; ?>" readonly>
						</div>
						<div class="form-group">
							<label>Nombres:</label>
							<input class="form-control" type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>
						</div>
						<div class="form-group">
							<label>Apellidos:</label>
							<input class="form-control" type="text" name="apellido" value="<?php echo $row['apellido']; ?>" required>
						</div>
						<div class="form-group">
							<label>Cedula:</label>
							<input class="form-control" type="text" name="cedula" maxlength="10" required value="<?php echo $row['cedula']; ?>">
						</div>
						<div class="form-group">
							<label>Genero</label>
							<select class="form-control" name="genero" id="inputGen" required>
								<option value="">----</option>
								<option value="Masculino">Masculino</option>
								<option value="Femenino">Femenino</option>
							</select>
						</div>
						<div class="form-group">
							<label>Año de nacimiento</label>
							<input class="form-control" type="date" name="nacido" value="<?php echo $row['nacido']; ?>" required>
						</div>
						<div class="form-group">
							<label>Edad</label>
							<input class="form-control" type="number" name="edad" value="<?php echo $row['edad']; ?>" required>
						</div>
						<div class="form-group">
							<br>
							<button type="submit" class="btn btn-primary">Enviar</button>
						</div>

					</form>
				</div> 
			</div> 

		</div>
	</div>
</div>

<!-- Eliminar -->
<div class="modal fade" id="delete_<?php echo $row['codigo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<center><h4 class="modal-title" id="myModalLabel">Borrar miembro</h4></center>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">	
				<p class="text-center">¿Estas seguro en borrar los datos de?</p>
				<h2 class="text-center"><?php echo $row['nombre']; ?></h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
				<a href="./php/deleteUsu.php?codigo=<?php echo $row['codigo']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span> Si</a>
			</div>

		</div>
	</div>
</div>
