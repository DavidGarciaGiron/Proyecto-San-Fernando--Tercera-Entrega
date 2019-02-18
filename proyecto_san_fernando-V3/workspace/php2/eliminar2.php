<?php
if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "DELETE FROM avi_mantenimiento WHERE id=".$_GET["id"];

			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../ver5.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='../ver5.php';</script>";
			}
}
?>