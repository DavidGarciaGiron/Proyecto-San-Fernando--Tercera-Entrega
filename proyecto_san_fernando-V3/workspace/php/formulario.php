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
<link href="https://fonts.googleapis.com/css?family=Major+Mono+Display" rel="stylesheet">

<?php
  include "conexion.php";

  $user_id=null;
  $sql1= "select * from prog_mantenimiento where id = ".$_GET["id"];

  $query = $con->query($sql1);
  $prog_mantenimiento = null;
  if($query->num_rows>0){
    while ($r=$query->fetch_object()){
      $prog_mantenimiento=$r;
      break;
    }
  }
?>

<?php if($prog_mantenimiento!=null):?>

<style>
  @import url('https://fonts.googleapis.com/css?family=Major+Mono+Display');

  .btn2 {
      padding-left: 20px;
      padding-right: 20px;
      padding-top: 10px;
      padding-bottom: 10px;
    	background: rgb(139, 13, 70, 1);
    	font-family: 'Slabo 27px', serif;
    	font-size:15px;
      border-radius:10px;
      border:1px solid rgb(139, 13, 55, 1);
      color:white;
      text-decoration: none;
  }
  
  .btn2:hover { 
    	background: rgb(139, 13, 55, 1);
    	color:white;
    	text-decoration: none;
  }
  
  .contenedor{
      padding:0;
      margin:0;
      background: rgb(0,0,0,.5);
      width:100%;
      height:90%;
      padding-top:2%;
      padding-left:3%;
  }
  
  .title {
		  font-size:30px;
			color: #000;
			font-family: 'Fahkwang', sans-serif;
			border-bottom:1px solid #000;
		  width:50%;
		  padding:0;
		  margin:0;
	}
	
	.feedback-input {
	    width:31%;
	    height:8%;
	    margin-right: 5px;
	    margin-bottom: 3px;
	    padding-left:10px;
	    background:#C1F6F3;
	    border:1px solid black;
	}
	
	.btn1 {
	  width:100%;
	  height:10%;
	  background:#636364  ;
	  color:white;
	  font-family: 'Major Mono Display', monospace;
	  font-size:25px;
	  border:1px solid black;
	}
	
	.btn1:hover {
	  background:white;
	  color:black;
	}
	
</style>

<div class="contenedor">
  <h1 class="title">Actualizar Registro Seleccionado</h1>
  <br>
  <a href="../ver2.php" class="btn2">CANCELAR</a>
  <br><br>
  <form role="form" method="post" action="php/actualizar.php">
  
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->planta; ?>" name="planta" placeholder="Planta" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->sistema; ?>" name="sistema" placeholder="Sistema" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->codigo_equipo; ?>" name="codigo_equipo" placeholder="Codigo Equipo" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->parte_equipo; ?>" name="parte_equipo" placeholder="Parte Equipo" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->equipo; ?>" name="equipo" placeholder="Equipo" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->denominacion; ?>" name="denominacion" placeholder="Denominacion" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->orden; ?>" name="orden" placeholder="Orden" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->operacion; ?>" name="operacion" placeholder="Operacion" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->frecuencia; ?>" name="frecuencia" placeholder="Frecuencia" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->actividades; ?>" name="actividades" placeholder="Actividades" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->t_control; ?>" name="t_control" placeholder="Control" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->fecha_ini_mas_tmp; ?>" name="fecha_ini_mas_tmp" placeholder="Fecha Ini Mas Tmp" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->fecha_fin_mas_tmpr; ?>" name="fecha_fin_mas_tmpr" placeholder="Fecha Fin Mas Tmpr" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->prioridad; ?>" name="prioridad" placeholder="Prioridad" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->tiempo_est_hrs; ?>" name="tiempo_est_hrs" placeholder="Tiempo Est. Hrs." require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->tiempo_est_r_hrs; ?>" name="tiempo_est_r_hrs" placeholder="Tiempo Est. R. Hrs." require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->nombres_apellidos; ?>" name="nombres_apellidos" placeholder="Nombres y Apellidos" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->puesto_trabajo; ?>" name="puesto_trabajo" placeholder="Puesto Trabajo" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->turno; ?>" name="turno" placeholder="Turno" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->emplazamiento; ?>" name="emplazamiento" placeholder="Emplazamiento" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->nro_h_ruta_ope; ?>" name="nro_h_ruta_ope" placeholder="Nro. H. Ruta Operacion" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->grupo_planif; ?>" name="grupo_planif" placeholder="Grupo Planif" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->precio; ?>" name="precio" placeholder="Precio" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->texto_expl; ?>" name="texto_expl" placeholder="Texto Expl" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->acreedor; ?>" name="acreedor" placeholder="Acreedor" require>
  <input type="text" class="feedback-input" value="<?php echo $prog_mantenimiento->status_sistema; ?>" name="status_sistema" placeholder="Estado del Sistema" require>

  <input type="hidden" name="id" value="<?php echo $prog_mantenimiento->id; ?>">
  <br><br>
  </div>
  <button type="submit" class="btn1">Actualizar</button>
  

  </form>




<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>