<?php

	if(!empty($_POST)){
		
		 if(isset($_POST["planta"]) && 
			isset($_POST["sistema"]) && 
			isset($_POST["codigo_equipo"]) && 
			isset($_POST["parte_equipo"]) && 
			isset($_POST["equipo"]) && 
			isset($_POST["denominacion"]) && 
			isset($_POST["orden"]) && 
			isset($_POST["operacion"]) && 
			isset($_POST["frecuencia"]) && 
			isset($_POST["actividades"]) && 
			isset($_POST["t_control"]) && 
			isset($_POST["fecha_ini_mas_tmp"]) && 
			isset($_POST["fecha_fin_mas_tmpr"]) && 
			isset($_POST["prioridad"]) && 
			isset($_POST["tiempo_est_hrs"]) && 
			isset($_POST["tiempo_est_r_hrs"]) && 
			isset($_POST["nombres_apellidos"]) && 
			isset($_POST["puesto_trabajo"]) && 
			isset($_POST["turno"]) && 
			isset($_POST["emplazamiento"]) && 
			isset($_POST["nro_h_ruta_ope"]) && 
			isset($_POST["grupo_planif"]) && 
			isset($_POST["precio"]) && 
			isset($_POST["texto_expl"]) && 
			isset($_POST["acreedor"]) && 
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
					$_POST["tiempo_est_r_hrs"]!=""&&
					$_POST["turno"]!=""&&
					$_POST["emplazamiento"]!=""&&
					$_POST["nro_h_ruta_ope"]!=""&&
					$_POST["grupo_planif"]!=""&&
					$_POST["precio"]!=""&&
					$_POST["texto_expl"]!=""&&
					$_POST["acreedor"]!=""&&
					$_POST["status_sistema"]!="")	{																																																																							                                                                                                                                    																																																																																										
				
				
						include "conexion.php";
						
						$sql = "insert into prog_mantenimiento(
							planta,sistema,
							codigo_equipo,
							parte_equipo,
							equipo,denominacion,
							orden,operacion,
							frecuencia,actividades,
							t_control,fecha_ini_mas_tmp,
							fecha_fin_mas_tmpr,prioridad,
							tiempo_est_hrs,tiempo_est_r_hrs,
							nombres_apellidos,puesto_trabajo,
							turno,emplazamiento,
							nro_h_ruta_ope,grupo_planif,
							precio,texto_expl,
							acreedor,status_sistema) value (
							
								\"$_POST[planta]\",
								\"$_POST[sistema]\",
								\"$_POST[codigo_equipo]\",
								\"$_POST[parte_equipo]\",
								\"$_POST[equipo]\",
								\"$_POST[denominacion]\",
								\"$_POST[orden]\",
								\"$_POST[operacion]\",
								\"$_POST[frecuencia]\",
								\"$_POST[actividades]\",
								\"$_POST[t_control]\",
								\"$_POST[fecha_ini_mas_tmp]\",
								\"$_POST[fecha_fin_mas_tmpr]\",
								\"$_POST[prioridad]\",
								\"$_POST[tiempo_est_hrs]\",
								\"$_POST[tiempo_est_r_hrs]\",
								\"$_POST[nombres_apellidos]\",
								\"$_POST[puesto_trabajo]\",
								\"$_POST[turno]\",
								\"$_POST[emplazamiento]\",
								\"$_POST[nro_h_ruta_ope]\",
								\"$_POST[grupo_planif]\",
								\"$_POST[precio]\",
								\"$_POST[texto_expl]\",
								\"$_POST[acreedor]\",
								\"$_POST[status_sistema]\")";
							
						$query = $con->query($sql);
						if($query!=null){
							print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
						}else{
							print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";
						}
				}
		}
	}

?>