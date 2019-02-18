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
	$sql1= "select * from prog_mantenimiento";

	$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>

	<link rel="stylesheet" type="text/css" href="css/estilosVer3.css">
	<link href="https://fonts.googleapis.com/css?family=Fahkwang" rel="stylesheet">
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
		spam{
			color:#2E323A;
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
			<td class="td"><?php echo $r["planta"]; ?></td>
			<td class="td"><?php echo $r["sistema"]; ?></td>
			<td class="td"><?php echo $r["codigo_equipo"]; ?></td>
			<td class="td"><?php echo $r["parte_equipo"]; ?></td>
			<td class="td"><?php echo $r["equipo"]; ?></td>
			<td class="td"><?php echo $r["denominacion"]; ?></td>
			<td class="td"><?php echo $r["orden"]; ?></td>
			<td class="td"><?php echo $r["operacion"]; ?></td>
			<td class="td"><?php echo $r["frecuencia"]; ?></td>
			<td class="td"><?php echo $r["actividades"]; ?></td>
			<td class="td"><?php echo $r["t_control"]; ?></td>
			<td class="td"><?php echo $r["fecha_ini_mas_tmp"]; ?></td>
			<td class="td"><?php echo $r["fecha_fin_mas_tmpr"]; ?></td>
			<td class="td"><?php echo $r["prioridad"]; ?></td>
			<td class="td"><?php echo $r["tiempo_est_hrs"]; ?></td>
			<td class="td"><?php echo $r["tiempo_est_r_hrs"]; ?></td>
			<td class="td"><?php echo $r["nombres_apellidos"]; ?></td>
			<td class="td"><?php echo $r["puesto_trabajo"]; ?></td>
			<td class="td"><?php echo $r["turno"]; ?></td>
			<td class="td"><?php echo $r["emplazamiento"]; ?></td>
			<td class="td"><?php echo $r["nro_h_ruta_ope"]; ?></td>
			<td class="td"><?php echo $r["grupo_planif"]; ?></td>
			<td class="td"><?php echo $r["precio"]; ?></td>
			<td class="td"><?php echo $r["texto_expl"]; ?></td>
			<td class="td"><?php echo $r["acreedor"]; ?></td>
			<td class="td"><?php echo $r["status_sistema"]; ?></td>
			<td class="td"><a href="./editar1.php?id=<?php echo $r["id"];?>"><img class="editar" src="https://pngimage.net/wp-content/uploads/2018/06/icono-editar-png-3.png" alt="editar"></a></td>
			<td class="td"><a href="#" id="del-<?php echo $r["id"];?>"><img class="eliminar" src="https://img.icons8.com/cotton/2x/remove-message.png" alt="eliminar"></a></td>
			
			<script>
				$("#del-"+<?php echo $r["id"];?>).click(function(e){
				e.preventDefault();
				p = confirm("Estas seguro?");
					if(p){
						window.location="./php/eliminar.php?id="+<?php echo $r["id"];?>;
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

	