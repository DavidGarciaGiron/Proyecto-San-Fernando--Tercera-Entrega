<?php

	if(!empty($_GET)){
		include "conexion.php";
			
		$sql = "DELETE FROM prog_mantenimiento WHERE id=".$_GET["id"];}
	
		$query = $con->query($sql);
		if($query!=null){
			print "<script>alert(\"Eliminado exitosamente.\");window.location='../ver2.php';</script>";
		}else{
			print "<script>alert(\"No se pudo eliminar.\");window.location='../ver2.php';</script>";
		}
	}

?>