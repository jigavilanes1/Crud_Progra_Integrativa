<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	
	<title>Progra</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/custom.css">
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/font-awesome.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
	<h3>USUARIOS</h3>
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
	<p>&nbsp;</p>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

  </nav>
	
	<div class="row">
		<div class="col-sm-12">
			<a href="./html/guarda_usu.html" class="btn btn-primary" data-toggle="modal"><span class="fa fa-plus"></span> Nuevo</a>
            <?php 
                session_start();
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-dismissible alert-success" style="margin-top:20px;">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php

                    unset($_SESSION['message']);
                }
            ?>
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
				<table class="table table-bordered table-striped"  id="tabla" style="margin-top:20px;">
					<thead>
						<th>CODIGO</th>
						<th>NOMBRE</th>
						<th>APELLIDO</th>
						<th>CEDULA</th>
						<th>GENERO</th>
						<th>NACIDO</th>
						<th>EDAD</th>
						<th>ESTADO</th>
						<th>ACCIONES</th>
					</thead>
					<tbody>
						<?php
							// incluye la conexión
							include_once('./php/connection.php');

							$database = new Connection();
							$db = $database->open();
							try{	
								$sql = 'SELECT * FROM tbl_persona';
								foreach ($db->query($sql) as $row) {
									?>
									<tr>
										<td><?php echo $row['codigo']; ?></td>
										<td><?php echo $row['nombre']; ?></td>
										<td><?php echo $row['apellido']; ?></td>
										<td><?php echo $row['cedula']; ?></td>
										<td><?php echo $row['genero']; ?></td>
										<td><?php echo $row['nacido']; ?></td>
										<td><?php echo $row['edad']; ?></td>
										<td><?php 
											if($row['estado']==0)
											{
												echo 'Activo';
											}else
											{
												echo 'Inactivo';
											} 
										?></td>
										<td>
											<a href="#edit_<?php echo $row['codigo']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fa fa-edit"></span> Editar</a>
											<a href="#delete_<?php echo $row['codigo']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="fa fa-trash"></span> Eliminar</a>
										</td>
										<?php include('./php/edit_delete_modalUsu.php'); ?>
									</tr>
									<?php 
								}
							}
							catch(PDOException $e){
								echo "There is some problem in connection: " . $e->getMessage();
							}

							//cerrar conexión
							$database->close();

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script src="./bootstrap/js/jquery.min.js"></script>
<script src="./bootstrap/js/bootstrap.js"></script>
<script src="./bootstrap/js/custom.js"></script>
<script type="text/javascript" src="./js/form.js"></script>

</body>
</html>
