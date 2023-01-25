<?php
  $codigo = $_POST['codigo'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $cedula = $_POST['cedula'];
  $genero = $_POST['genero'];
  $nacido = $_POST['nacido'];
  $edad = $_POST['edad'];

    // Datos para conectar a la base de datos.
  $nombreServidor = "localhost";
  $nombreUsuario = "root";
  $passwordBaseDeDatos = "123";
  $nombreBaseDeDatos = "bd_progra_ite";
  
  // Crear conexión con la base de datos.
  $conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
   
  // Validar la conexión de base de datos.
  if ($conn ->connect_error) {
    die("Connection failed: " . $conn ->connect_error);
  }
 
   // Consulta a la base de datos.
  $query = "UPDATE tbl_persona SET nombre = '$nombre', apellido = '$apellido', cedula = '$cedula', genero='$genero',nacido='$nacido' ,edad='$edad' WHERE codigo = '$codigo'";
  $resultado = mysqli_query($conn,$query);
  echo $query;
  //Verifica que la consulta se realizo
  if($resultado){
	  echo '<script>alert("ACTUALIZACION EXISTOSA");</script>';
    header("Location: ../index.php");
  }
  else{
    echo '<script>alert("ERROR AL ACTUALIZAR");</script>';
  }



	
?>