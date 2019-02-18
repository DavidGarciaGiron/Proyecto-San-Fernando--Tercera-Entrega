<!--
	////////// ////////// //////// ////   // // //////// ////////
	    //     //     //  //       // //  // // //       //    //
	    //     /////      //       //  // // // //       //    //
	    //     //     //  //       //   //// // //       //    //
	    //     /////////  //////// //   //// // //////// ////////
-->
	<!--
		VISTA DE TECNICO 
	-->

<?php
	include "conexion.php";
	$user_id=null;
	$sql1= "select * from avi_mantenimiento";

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
			
		</thead>
<?php while ($r=$query->fetch_array()):?>
	<tbody class="tbody">
		<tr>
					<td class="td"><?php echo $r["planta"]; ?></td>
					<td class="td"><?php echo $r["turno"]; ?></td>
					<td class="td"><?php echo $r["nombre_tecnico"]; ?></td>
					<td class="td"><?php echo $r["sistema"]; ?></td>
					<td class="td"><?php echo $r["nombre_maquina_equipo"]; ?></td>
					<td class="td"><?php echo $r["tipo_mantto"]; ?></td>
					<td class="td"><?php echo $r["odm"]; ?></td>
					<td class="td"><?php echo $r["tipo_falla"]; ?></td>
					<td class="td"><?php echo $r["estado_trabajo"]; ?></td>
					<td class="td"><?php echo $r["observaciones"]; ?></td>
					<td class="td"><?php echo $r["targeta_roja"]; ?></td>
					<td class="td"><?php echo $r["fecha_ejecucion"]; ?></td>
					<td class="td"><?php echo $r["hora_ini"]; ?></td>
					<td class="td"><?php echo $r["hora_fin"]; ?></td>
					<td class="td"><?php echo $r["inconveniente"]; ?></td>
					<td class="td"><?php echo $r["descripcion_actividades"]; ?></td>
					<td class="td"><?php echo $r["duracion_actividad"]; ?></td>
					
					<td><a href="./editar4.php?id=<?php echo $r["id"];?>"><img class="editar" src="https://pngimage.net/wp-content/uploads/2018/06/icono-editar-png-3.png" alt="editar"></a></td>
		</tr>
	</tbody>
	<?php endwhile;?>
</table>

<script src="bootstrap/js/bootstrap.min.js"></script>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>

	