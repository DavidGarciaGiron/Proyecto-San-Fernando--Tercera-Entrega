<?php

	if(!empty($_POST)){
		
		 if(isset($_POST["planta"])&&
			isset($_POST["sistema"])&&
			isset($_POST["codigo_equipo"])&&
			isset($_POST["parte_equipo"])&&
			isset($_POST["equipo"])&&
			isset($_POST["denominacion"])&&
			isset($_POST["orden"])&&
			isset($_POST["operacion"])&&
			isset($_POST["frecuencia"])&&
			isset($_POST["actividades"])&&
			isset($_POST["t_control"])&&
			isset($_POST["fecha_ini_mas_tmp"])&&
			isset($_POST["fecha_fin_mas_tmpr"])&&
			isset($_POST["prioridad"])&&
			isset($_POST["tiempo_est_hrs"])&&
			isset($_POST["tiempo_est_r_hrs"])&&
			isset($_POST["nombres_apellidos"])&&
			isset($_POST["turno"])&&
			isset($_POST["emplazamiento"])&&
			isset($_POST["nro_h_ruta_ope"])&&
			isset($_POST["grupo_planif"])&&
			isset($_POST["precio"])&&
			isset($_POST["texto_expl"])&&
			isset($_POST["acreedor"])&&
			isset($_POST["status_sistema"]))	{
				
				 if($_POST["planta"]!=""&&
					$_POST["sistema"]!=""&&
					$_POST["codigo_equipo"]!=""&&
					$_POST["parte_equipo"]!=""&&
					$_POST["equipo"]!=""&&
					$_POST["denominacion"]!=""&&
					$_POST["orden"]!=""&&
					$_POST["operacion"]!=""&&
					$_POST["frecuencia"]!=""&&
					$_POST["actividades"]!=""&&
					$_POST["t_control"]!=""&&
					$_POST["fecha_ini_mas_tmp"]!=""&&
					$_POST["fecha_fin_mas_tmpr"]!=""&&
					$_POST["prioridad"]!=""&&
					$_POST["tiempo_est_hrs"]!=""&&
					$_POST["tiempo_est_r_hrs"]!=""&&
					$_POST["nombres_apellidos"]!=""&&
					$_POST["puesto_trabajo"]!=""&&
					$_POST["turno"]!=""&&
					$_POST["emplazamiento"]!=""&&
					$_POST["nro_h_ruta_ope"]!=""&&
					$_POST["grupo_planif"]!=""&&
					$_POST["precio"]!=""&&
					$_POST["texto_expl"]!=""&&
					$_POST["acreedor"]!=""&&
					$_POST["status_sistema"]!="")	{
						
						include "conexion.php";
						$sql = "update prog_mantenimiento set 
							planta=\"$_POST[planta]\",
							sistema=\"$_POST[sistema]\",
							codigo_equipo=\"$_POST[codigo_equipo]\",
							parte_equipo=\"$_POST[parte_equipo]\",
							equipo=\"$_POST[equipo]\",
							denominacion=\"$_POST[denominacion]\",
							orden=\"$_POST[orden]\",
							operacion=\"$_POST[operacion]\",
							frecuencia=\"$_POST[frecuencia]\",
							actividades=\"$_POST[actividades]\",
							t_control=\"$_POST[t_control]\",
							fecha_ini_mas_tmp=\"$_POST[fecha_ini_mas_tmp]\",
							fecha_fin_mas_tmpr=\"$_POST[fecha_fin_mas_tmpr]\",
							prioridad=\"$_POST[prioridad]\",
							tiempo_est_hrs=\"$_POST[tiempo_est_hrs]\",
							tiempo_est_r_hrs=\"$_POST[tiempo_est_r_hrs]\",
							nombres_apellidos=\"$_POST[nombres_apellidos]\",
							puesto_trabajo=\"$_POST[puesto_trabajo]\",
							turno=\"$_POST[turno]\",
							emplazamiento=\"$_POST[emplazamiento]\",
							nro_h_ruta_ope=\"$_POST[nro_h_ruta_ope]\",
							grupo_planif=\"$_POST[grupo_planif]\",
							precio=\"$_POST[precio]\",
							texto_expl=\"$_POST[texto_expl]\",
							acreedor=\"$_POST[acreedor]\",
							status_sistema=\"$_POST[status_sistema]\" 
							where id=".$_POST["id"];
					
						$query = $con->query($sql);
						
						if($query!=null)	{
							print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver2.php';</script>";
						} else{
							print "<script>alert(\"No se pudo actualizar.\");window.location='../ver2.php';</script>";
						}
				}
		}
	}

?>