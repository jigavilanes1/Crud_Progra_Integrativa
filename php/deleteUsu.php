<?php

	session_start();
	include_once('connection.php');	
	
	if(isset($_GET['codigo'])){
		$database = new Connection();
		$db = $database->open();
		$idlogin = "ADMIN";
		
		try{
			if($_GET['codigo'] != $idlogin){
                $sql = "UPDATE tbl_persona SET estado ='1' WHERE codigo = '".$_GET['codigo']."'";
								
				$_SESSION['message'] = ( $db->exec($sql) ) ? 'Miembro eliminado correctamente' : 'Ocurrio un error. No se pudo eliminar al miembro';				
			}
			else
			{
				$_SESSION['message'] = 'No se puede eliminar este miembro en este momento';
			}
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//cerrar conexión
		$database->close();

	}
	else{
		$_SESSION['message'] = 'Seleccione miembro para eliminar';
	}

	header('location: ../index.php');

?>