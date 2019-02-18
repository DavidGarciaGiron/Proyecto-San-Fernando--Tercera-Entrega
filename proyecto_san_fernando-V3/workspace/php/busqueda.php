<!--
	//       // /////    ////////// //////
	//       // //  ///  //     //  //  ///
	//       // //   /// /////      //////
	//       // //  ///  //     //  //  //
	//////// // /////    /////////  //   //
-->
	<!--
		VISTA DE LIDER 
	-->

<?php

	include "conexion.php";

	$user_id=null;
	
	$sql1= "select * from prog_mantenimiento where
			planta like '%$_GET[s]%' or
			sistema like '%$_GET[s]%' or
			codigo_equipo like '%$_GET[s]%' or
			parte_equipo like '%$_GET[s]%' or
			equipo like '%$_GET[s]%' or
			denominacion like '%$_GET[s]%' or
			orden like '%$_GET[s]%' or
			operacion like '%$_GET[s]%' or
			frecuencia like '%$_GET[s]%' or
			actividades like '%$_GET[s]%' or
			t_control like '%$_GET[s]%' or
			fecha_ini_mas_tmp like '%$_GET[s]%' or
			fecha_fin_mas_tmpr like '%$_GET[s]%' or
			prioridad like '%$_GET[s]%' or
			tiempo_est_hrs like '%$_GET[s]%' or
			tiempo_est_r_hrs like '%$_GET[s]%' or
			nombres_apellidos like '%$_GET[s]%' or
			puesto_trabajo like '%$_GET[s]%' or
			turno like '%$_GET[s]%' or
			emplazamiento like '%$_GET[s]%' or
			nro_h_ruta_ope like '%$_GET[s]%' or
			grupo_planif like '%$_GET[s]%' or
			precio like '%$_GET[s]%' or
			texto_expl like '%$_GET[s]%' or
			acreedor like '%$_GET[s]%' or
			status_sistema like '%$_GET[s]%' ";
			
	$query = $con->query($sql1);
?>

<?php 
	
	if($query->num_rows>0):?>

		<link rel="stylesheet" type="text/css" href="css/estilosVer3.css">
		
		<script src="js/jquery.min.js"></script>

		<style>
	
		.thead p{
			width:100%;
			margin-top:15px;
			margin-bottom:15px;
			margin-left:5px;
			margin-right:10px;
			font-size:12px;
			text-align: center;
		}
		
		td{
			width:100%;
			padding-left:30px;
			padding-right:30px;
			border-right:1px solid #2E323A;
			border-bottom:1px solid #2E323A;
			margin-top:15px;
			margin-bottom:15px;
			font-family: 'Fahkwang', sans-serif;
			font-size:14px;
		}
		
		thead{
			background:#2E323A;
			color:white;
		}
		
		tbody {
			background: rgb(255, 255, 255, .5);
		}
		
		tbody:hover {
			background: rgb(108, 109, 112, .5);
			color:white;
			font-size:15px;
		}
		
		.editar {
			width: 40px;
		}
		
		.eliminar {
			width: 40px;
		}
		
	</style>

		<table>
			<thead>
				<th class="thead th"><p>PLANTA</p></th>
				<th class="thead"><p>SISTEMA</p></th>
				<th class="thead"><p>CODIGO<spam>_</spam>DE<spam>_</spam>EQUIPO</p></th>
				<th class="thead"><p>PARTE<spam>_</spam>DE<spam>_</spam>EQUIPO</p></th>
				<th class="thead"><p>EQUIPO</p></th>
				<th class="thead"><p>DENOMINACION</p></th>
				<th class="thead"><p>ORDEN</p></th>
				<th class="thead"><p>OPERACION</p></th>
				<th class="thead"><p>FRECUENCIA</p></th>
				<th class="thead"><p>ACTIVIDADES</p></th>
				<th class="thead"><p>CONTROL</p></th>
				<th class="thead"><p>FECHA<spam>_</spam>DE<spam>_</spam>INICIO</p></th>
				<th class="thead"><p>FECHA<spam>_</spam>DE<spam>_</spam>FIN</p></th>
				<th class="thead"><p>PRIORIDAD</p></th>
				<th class="thead"><p>TIEMPO<spam>_</spam>ESTIMADO<spam>_</spam>EN<spam>_</spam>HORAS</p></th>
				<th class="thead"><p>TIEMPO<spam>_</spam>REAL<spam>_</spam>ESTIMADO<spam>_</spam>EN<spam>_</spam>HORAS</p></th>
				<th class="thead"><p>NOMBRES<spam>_</spam>Y<spam>_</spam>APELLIDOS</p></th>
				<th class="thead"><p>PUESTO<spam>_</spam>TRABAJO</p></th>
				<th class="thead"><p>TURNO</p></th>
				<th class="thead"><p>EMPLAZAMINETO</p></th>
				<th class="thead"><p>NRO<spam>_</spam>HOJA<spam>_</spam>DE<spam>_</spam>RUTA</p></th>
				<th class="thead"><p>GRUPO<spam>_</spam>PLANIFICACION</p></th>
				<th class="thead"><p>PRECIO</p></th>
				<th class="thead"><p>TEXTO<spam>_</spam>EXPL</p></th>
				<th class="thead"><p>ACREEDOR</p></th>
				<th class="thead"><p>ESTADO<spam>_</spam>DE<spam>_</spam>SISTEMA</p></th>
				<th class="thead"><p>EDITAR</p></th>
				<th class="thead"><p>ELIMINAR</p></th>
			</thead>
			<?php while ($r=$query->fetch_array()):?>
			<tbody class="tbody">
				<tr>
					<td><?php echo $r["planta"]; ?></td>
					<td><?php echo $r["sistema"]; ?></td>
					<td><?php echo $r["codigo_equipo"]; ?></td>
					<td><?php echo $r["parte_equipo"]; ?></td>
					<td><?php echo $r["equipo"]; ?></td>
					<td><?php echo $r["denominacion"]; ?></td>
					<td><?php echo $r["orden"]; ?></td>
					<td><?php echo $r["operacion"]; ?></td>
					<td><?php echo $r["frecuencia"]; ?></td>
					<td><?php echo $r["actividades"]; ?></td>
					<td><?php echo $r["t_control"]; ?></td>
					<td><?php echo $r["fecha_ini_mas_tmp"]; ?></td>
					<td><?php echo $r["fecha_fin_mas_tmpr"]; ?></td>
					<td><?php echo $r["prioridad"]; ?></td>
					<td><?php echo $r["tiempo_est_hrs"]; ?></td>
					<td><?php echo $r["tiempo_est_r_hrs"]; ?></td>
					<td><?php echo $r["nombres_apellidos"]; ?></td>
					<td><?php echo $r["puesto_trabajo"]; ?></td>
					<td><?php echo $r["turno"]; ?></td>
					<td><?php echo $r["emplazamiento"]; ?></td>
					<td><?php echo $r["nro_h_ruta_ope"]; ?></td>
					<td><?php echo $r["grupo_planif"]; ?></td>
					<td><?php echo $r["precio"]; ?></td>
					<td><?php echo $r["texto_expl"]; ?></td>
					<td><?php echo $r["acreedor"]; ?></td>
					<td><?php echo $r["status_sistema"]; ?></td>
					<td><a href="./editar.php?id=<?php echo $r["id"];?>"><img class="editar" src="https://pngimage.net/wp-content/uploads/2018/06/icono-editar-png-3.png" alt="editar"></a></td>
					<td><a href="#" id="del-<?php echo $r["id"];?>"><img class="eliminar" src="https://img.icons8.com/cotton/2x/remove-message.png" alt="eliminar"></a></td>
	
					<script>
						$("#del-"+<?php echo $r["id"];?>).click(function(e)	{
							e.preventDefault();
							p = confirm("Estas seguro?");
							if(p)	{
								window.location="./php/eliminar1.php?id="+<?php echo $r["id"];?>;
							}
						});
					</script>
				</tr>
			</tbody>
			<?php endwhile;?>
		</table>
		<?php else:?>
		<p class="alert alert-warning">No hay resultados</p>
	<?php endif;?>
