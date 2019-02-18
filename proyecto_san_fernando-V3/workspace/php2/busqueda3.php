<!--
	// ////   // //////// ////////// ////   // // ////////// //////   ////////
	// // //  // //       //     //  // //  // // //     //  //  ///  //    //
	// //  // // // ///// /////      //  // // // /////      //////   //    //
	// //   //// //    // //     //  //   //// // //     //  //  //   //    //
	// //   //// //////// /////////  //   //// // /////////  //   //  ////////
-->
	<!--
		VISTA DE INGENIERO 
	-->

<?php

	include "conexion.php";

	$user_id=null;
	
	$sql1= "select * from avi_mantenimiento where
			planta like '%$_GET[s]%' or
			turno like '%$_GET[s]%' or
			nombre_tecnico like '%$_GET[s]%' or
			sistema like '%$_GET[s]%' or
			nombre_maquina_equipo like '%$_GET[s]%' or
			tipo_mantto like '%$_GET[s]%' or
			odm like '%$_GET[s]%' or
			tipo_falla like '%$_GET[s]%' or
			estado_trabajo like '%$_GET[s]%' or
			observaciones like '%$_GET[s]%' or
			targeta_roja like '%$_GET[s]%' or
			fecha_ejecucion like '%$_GET[s]%' or
			hora_ini like '%$_GET[s]%' or
			hora_fin like '%$_GET[s]%' or
			inconveniente like '%$_GET[s]%' or
			descripcion_actividades like '%$_GET[s]%' or
			duracion_actividad like '%$_GET[s]%' ";

			
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
				<th class="thead"><p>TURNO</p></th>
				<th class="thead"><p>NOMBRE<spam>_</spam>DE<spam>_</spam>TECNICO</p></th>
				<th class="thead"><p>SISTEMA</p></th>
				<th class="thead"><p>NOMBRE<spam>_</spam>DE<spam>_</spam>MAQUINA<spam>_</spam>O<spam>_</spam>EQUIPO</p></th>
				<th class="thead"><p>TIPO<spam>_</spam>DE<spam>_</spam>MANTENIMIENTO</p></th>
				<th class="thead"><p>ORDEN<spam>_</spam>DE<spam>_</spam>MANTENIMIENTO</p></th>
				<th class="thead"><p>TIPO<spam>_</spam>DE<spam>_</spam>FALLA</p></th>
				<th class="thead"><p>ESTADO<spam>_</spam>DE<spam>_</spam>TRABAJO</p></th>
				<th class="thead"><p>OBSERVACIONES</p></th>
				<th class="thead"><p>TARJETA<spam>_</spam>ROJA</p></th>
				<th class="thead"><p>FECHA<spam>_</spam>DE<spam>_</spam>EJECUCIÓN</p></th>
				<th class="thead"><p>HORA<spam>_</spam>DE<spam>_</spam>INICIO</p></th>
				<th class="thead"><p>HORA<spam>_</spam>DE<spam>_</spam>FIN</p></th>
				<th class="thead"><p>INCONVENIENTE</p></th>
				<th class="thead"><p>DESCRIPCION<spam>_</spam>DE<spam>_</spam>ACTIVIDADES</p></th>
				<th class="thead"><p>DURACIÓN<spam>_</spam>DE<spam>_</spam>ACTIVIDADES</p></th>
				<th class="thead"><p>EDITAR</p></th>
				<th class="thead"><p>ELIMINAR</p></th>
			</thead>
			<?php while ($r=$query->fetch_array()):?>
			<tbody class="tbody">
				<tr>
					<td><?php echo $r["planta"]; ?></td>
					<td><?php echo $r["turno"]; ?></td>
					<td><?php echo $r["nombre_tecnico"]; ?></td>
					<td><?php echo $r["sistema"]; ?></td>
					<td><?php echo $r["nombre_maquina_equipo"]; ?></td>
					<td><?php echo $r["tipo_mantto"]; ?></td>
					<td><?php echo $r["odm"]; ?></td>
					<td><?php echo $r["tipo_falla"]; ?></td>
					<td><?php echo $r["estado_trabajo"]; ?></td>
					<td><?php echo $r["observaciones"]; ?></td>
					<td><?php echo $r["targeta_roja"]; ?></td>
					<td><?php echo $r["fecha_ejecucion"]; ?></td>
					<td><?php echo $r["hora_ini"]; ?></td>
					<td><?php echo $r["hora_fin"]; ?></td>
					<td><?php echo $r["inconveniente"]; ?></td>
					<td><?php echo $r["descripcion_actividades"]; ?></td>
					<td><?php echo $r["duracion_actividad"]; ?></td>

					<td><a href="./editar6.php?id=<?php echo $r["id"];?>"><img class="editar" src="https://pngimage.net/wp-content/uploads/2018/06/icono-editar-png-3.png" alt="editar"></a></td>
					<td><a href="#" id="del-<?php echo $r["id"];?>"><img class="eliminar" src="https://img.icons8.com/cotton/2x/remove-message.png" alt="eliminar"></a></td>
	
					<script>
						$("#del-"+<?php echo $r["id"];?>).click(function(e)	{
							e.preventDefault();
							p = confirm("Estas seguro?");
							if(p)	{
								window.location="./php2/eliminar3.php?id="+<?php echo $r["id"];?>;
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
