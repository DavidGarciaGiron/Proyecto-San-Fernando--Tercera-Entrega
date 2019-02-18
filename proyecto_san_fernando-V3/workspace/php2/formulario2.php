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
  $sql1= "select * from avi_mantenimiento where id = ".$_GET["id"];

  $query = $con->query($sql1);
  $prog_mantenimiento = null;
  if($query->num_rows>0){
    while ($r=$query->fetch_object()){
      $avi_mantenimiento=$r;
      break;
    }
  }
?>

<?php if($avi_mantenimiento!=null):?>

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
  <a href="../ver5.php" class="btn2">Cancelar</a>
  <br><br>
  
  <form role="form" method="post" action="php2/actualizar2.php">
  
  <input type="text" class="feedback-input" value="<?php echo $avi_mantenimiento->planta; ?>" name="planta" placeholder="Planta" require>
  <input type="text" class="feedback-input" value="<?php echo $avi_mantenimiento->turno; ?>" name="turno" placeholder="Turno" require>
  <input type="text" class="feedback-input" value="<?php echo $avi_mantenimiento->nombre_tecnico; ?>" name="nombre_tecnico" placeholder="Nombre de Tecnico" require>
  <input type="text" class="feedback-input" value="<?php echo $avi_mantenimiento->sistema; ?>" name="sistema" placeholder="Sistema" require>
  <input type="text" class="feedback-input" value="<?php echo $avi_mantenimiento->nombre_maquina_equipo; ?>" name="nombre_maquina_equipo" placeholder="Nombre de Maquina o Equipo" require>
  <input type="text" class="feedback-input" value="<?php echo $avi_mantenimiento->tipo_mantto; ?>" name="tipo_mantto" placeholder="Tipo de Mantenimiento" require>
  <input type="text" class="feedback-input" value="<?php echo $avi_mantenimiento->odm; ?>" name="odm" placeholder="Orden de Mantenimiento" require>
  <input type="text" class="feedback-input" value="<?php echo $avi_mantenimiento->tipo_falla; ?>" name="tipo_falla" placeholder="Tipo de Falla" require>
  <input type="text" class="feedback-input" value="<?php echo $avi_mantenimiento->estado_trabajo; ?>" name="estado_trabajo" placeholder="Estado del Trabajo" require>
  <input type="text" class="feedback-input" value="<?php echo $avi_mantenimiento->observaciones; ?>" name="observaciones" placeholder="Observaciones" require>
  <input type="text" class="feedback-input" value="<?php echo $avi_mantenimiento->targeta_roja; ?>" name="targeta_roja" placeholder="Tarjeta Roja" require>
  <input type="text" class="feedback-input" value="<?php echo $avi_mantenimiento->fecha_ejecucion; ?>" name="fecha_ejecucion" placeholder="Fecha de Ejecución" require>
  <input type="text" class="feedback-input" value="<?php echo $avi_mantenimiento->hora_ini; ?>" name="hora_ini" placeholder="Hora de Inicio" require>
  <input type="text" class="feedback-input" value="<?php echo $avi_mantenimiento->hora_fin; ?>" name="hora_fin" placeholder="Hora de Fin" require>
  <input type="text" class="feedback-input" value="<?php echo $avi_mantenimiento->inconveniente; ?>" name="inconveniente" placeholder="Inconveniente" require>
  <input type="text" class="feedback-input" value="<?php echo $avi_mantenimiento->descripcion_actividades; ?>" name="descripcion_actividades" placeholder="Descripcion de Actividades" require>
  <input type="text" class="feedback-input" value="<?php echo $avi_mantenimiento->duracion_actividad; ?>" name="duracion_actividad" placeholder="Duracion de Actividades" require>

  <input type="hidden" name="id" value="<?php echo $avi_mantenimiento->id; ?>">
  <br><br>
  </div>
  <button type="submit" class="btn1">Actualizar</button>
</form>

<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>