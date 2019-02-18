<?php

if(!empty($_POST))  {
    
	if(isset($_POST["planta"]) &&
	   isset($_POST["turno"]) &&
	   isset($_POST["nombre_tecnico"]) &&
	   isset($_POST["sistema"]) &&
	   isset($_POST["nombre_maquina_equipo"]) &&
	   isset($_POST["tipo_mantto"]) &&
	   isset($_POST["odm"]) &&
	   isset($_POST["tipo_falla"]) &&
	   isset($_POST["estado_trabajo"]) &&
	   isset($_POST["observaciones"]) &&
	   isset($_POST["targeta_roja"]) &&
	   isset($_POST["fecha_ejecucion"]) &&
	   isset($_POST["hora_ini"]) &&
	   isset($_POST["hora_fin"]) &&
	   isset($_POST["inconveniente"]) &&
	   isset($_POST["descripcion_actividades"]) &&
	   isset($_POST["duracion_actividad"]))  {
	       
		if($_POST["planta"]!=""&& 
		   $_POST["turno"]!=""&&
		   $_POST["nombre_tecnico"]!=""&&
		   $_POST["sistema"]!=""&&
		   $_POST["nombre_maquina_equipo"]!=""&&
		   $_POST["tipo_mantto"]!=""&&
		   $_POST["odm"]!=""&&
		   $_POST["tipo_falla"]!=""&&
		   $_POST["estado_trabajo"]!=""&&
		   $_POST["observaciones"]!=""&&
		   $_POST["targeta_roja"]!=""&&
		   $_POST["fecha_ejecucion"]!=""&&
		   $_POST["hora_ini"]!=""&&
		   $_POST["hora_fin"]!=""&&
		   $_POST["inconveniente"]!=""&&
		   $_POST["descripcion_actividades"]!=""&&
		   $_POST["duracion_actividad"]!="")   {
		       
			include "conexion.php";
			
			$sql = "insert into avi_mantenimiento(
			        planta, turno,
			        nombre_tecnico, sistema,
			        nombre_maquina_equipo, tipo_mantto,
			        odm, tipo_falla,
			        estado_trabajo, observaciones,
			        targeta_roja, fecha_ejecucion,
			        hora_ini, hora_fin,
			        inconveniente, descripcion_actividades,
			        duracion_actividad) value (
			        
			            \"$_POST[planta]\",
			            \"$_POST[turno]\",
			            \"$_POST[nombre_tecnico]\",
			            \"$_POST[sistema]\",
			            \"$_POST[nombre_maquina_equipo]\",
			            \"$_POST[tipo_mantto]\",
			            \"$_POST[odm]\",
			            \"$_POST[tipo_falla]\",
			            \"$_POST[estado_trabajo]\",
			            \"$_POST[observaciones]\",
			            \"$_POST[targeta_roja]\",
			            \"$_POST[fecha_ejecucion]\",
			            \"$_POST[hora_ini]\",
			            \"$_POST[hora_fin]\",
			            \"$_POST[inconveniente]\",
			            \"$_POST[descripcion_actividades]\",
			            \"$_POST[duracion_actividad]\") ";
			     
			            
			$query = $con->query($sql);
			
			if($query!=null)    {
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver4.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver4.php';</script>";
			}
		}
	}
}
?>